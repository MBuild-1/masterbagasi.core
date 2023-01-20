<?php

namespace App\Http\Controllers\API;

use App\Helpers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class NewAuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            $response = Http::withHeaders([
                'Accept' => 'application/json',
            ])->post(API::URL()['login'], [
                    'email' => $request->email,
                    'password' => $request->password,
                ]);

            $res = json_decode($response->body());

            $minutes = 60;

            Cookie::queue('token-auth', $res->data->access_token, $minutes);

            if ($res->meta->code == 401) {
                return redirect()->back()->with('message', $res->meta->message);
            }

            if ($res->data->user->role == 1) {
                return redirect('/admin/dashboard')->with('message', 'Welcome to Dasboard');
            } else {
                return redirect('/');
            }

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function logout(Request $request)
    {
        $token = $request->cookie('token-auth'); 

        if ($token != null) {
            Http::withHeaders([
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $token,
            ])->post(API::URL()['logout']);
            
                Cookie::queue(Cookie::forget('token-auth'));
                return redirect('/');
        } else {
            return redirect("/")->with('message', 'gagal logout');
        }
    }

    public function register(Request $request)
    {
        try {
            $response = Http::withHeaders([
                'Accept' => 'application/json',
            ])->post(API::URL()['register'], [
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $request->password,
                    'password_confirmation' => $request->password_confirmation,
                ]);

                $res = json_decode($response->body());

                if ($res->meta->code == 401) {
                    $validation = $res->data;
                    // dd($validation);
                    return view('auth.register', ['validation' => $validation]);
                } else {
                    $minutes = 60;

                    Cookie::queue('token-auth', $res->data->access_token, $minutes);

                    return redirect('/');
                }

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
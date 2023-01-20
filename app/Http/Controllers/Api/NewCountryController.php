<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;


class NewCountryController extends Controller
{
    public function handleSelect(Request $request)
    {
        $minutes = 60;

        Cookie::queue('country-name', $request->country, $minutes);

        return redirect()->back();
    }
}

<?php 

namespace App\Helpers;

class API {
    public static function URL() {
        $list = [
            'login' => env('API_URL'). '/auth/login',
            'register' => env('API_URL'). '/auth/register',
            'logout' => env('API_URL'). '/auth/logout',
            'profile' => env('API_URL'). '/user/profile',
        ];
        return $list;
    }
}
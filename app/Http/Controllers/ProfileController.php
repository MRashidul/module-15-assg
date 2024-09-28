<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;


class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare the variables
        $name = "Donal Trump";
        $age = "75";

        // Store data in an associative array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        // Set the cookie with the given parameters
        $cookie = cookie(
            'access_token',     // Cookie name
            '123-XYZ',          // Cookie value
            1,                  // Minutes (1 minute)
            '/',                // Path
            $_SERVER['SERVER_NAME'], // Domain
            false,              // Secure (false)
            true                // HttpOnly (true)
        );

        // Return the response with status 200 and attach the cookie
        return response()->json($data, 200)->cookie($cookie);
    }
}

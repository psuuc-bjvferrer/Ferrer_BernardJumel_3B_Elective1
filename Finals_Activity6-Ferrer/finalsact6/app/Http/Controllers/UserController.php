<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function getUsers()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/users');

        if ($response->successful()) {
            $users = $response->json();
            return view('users', ['users' => $users]);
        }

        return response()->json(['error' => 'Unable to fetch users'], 500);
    }
}
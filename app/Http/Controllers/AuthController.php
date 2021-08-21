<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function register(Request $request) {
        $fields = $request->validate([
            'user_name' => 'required|string',
            'user_email' => 'required|string|unique:users,user_email',
            'password' => 'required|string|confirmed',
            'user_phone' => 'string',
            'user_type_id' => 'required|integer'
        ]);

        $user = User::create([
            'user_name' => $fields['user_name'],
            'user_email' => $fields['user_email'],
            'password' => bcrypt($fields['password']),
            'user_phone' => $fields['user_phone'],
            'user_type_id' => $fields['user_type_id']
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function login(Request $request) {
        $fields = $request->validate([
            'user_email' => 'required|string',
            'password' => 'required|string'
        ]);

        // Check email
        $user = User::where('user_email', $fields['user_email'])->first();

        // Check password
        if(!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Bad creds'
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function logout(Request $request) {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged out'
        ];
    }
}

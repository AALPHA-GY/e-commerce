<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ]);
        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return response()->json([
                "success" => true,
                "token" => $user->createToken('Login')->accessToken,
                "user" => auth()->user()
            ],200);
        }

        return response()->json([
            'success' => false,
            'message' => 'Unauthorized',
        ], 401);

    }

    public function logout (Request $request) {
        $token = $request->user()->token();
        $token->revoke();
        $response = ['message' => 'You have been successfully logged out!'];
        return response($response, 200);
    }

    public function get_user(Request $request)
    {
        return response()->json(['user' => auth()->user()]);
    }

}

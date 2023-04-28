<?php

namespace App\Http\Controllers\ApiControllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\TokenRepository;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $login = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (!Auth::attempt($login)) {
            return response(['message' => 'login is invalid']);
        }

        $accessToken = Auth::user()->createToken('authToken')->accessToken;
        return response(['user' => Auth::user(), 'access_token' => $accessToken]);
    }

    public function logout()
    {
        Auth::user()->token()->revoke();
        return response()->json([
            'massage' => 'Logout success'
        ]);
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' =>  'required|max:225',
            'email' =>  'required|unique:users|email:dns',
            'password' => 'required|min:8'
        ]);

        $data['password'] = bcrypt($data['password']);

        $newuser = User::create($data);

        return new UserResource($newuser);
    }
}

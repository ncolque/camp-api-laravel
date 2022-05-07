<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            /* 'c_password' => 'required|same:password', */
        ]);

        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        $token = $user->createToken('register-token')->plainTextToken;

        return response()->json(
            [
                'message' => 'Usuario creado correctamente',
                'user' => $user,
                'token' => $token,
            ],
            Response::HTTP_CREATED
        );
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('login-token')->plainTextToken;

            return response()->json(
                [
                    'message' => 'Bienvenido al sistema',
                    'user' => $user,
                    'token' => $token,
                ],
                Response::HTTP_ACCEPTED
            );
        } else {
            return response()->json(
                [
                    'message' => 'Cuenta o password incorrectos',
                ],
                Response::HTTP_UNAUTHORIZED
            );
        }
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return response()->json(
            [
                'message' => 'Hasta pronto, Adios',
            ],
            Response::HTTP_OK
        );
    }
}

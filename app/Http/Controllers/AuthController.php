<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Support\Facades\Hash; 

use App\Models\User;

class AuthController extends Controller
{
    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'new_password' => 'required|string|min:8|max:16',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 'Datos inválidos'], 400);
        }

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return response()->json(['message' => 'Contraseña actualizada correctamente']);
    }
    //
    public function login (Request $request) 
    {
        $credentials = $request->only('email','password');

        $validator = Validator::make($credentials, [
            'email'    => 'required|email',
            'password' => 'required|string|min:8|max:16',
        ]);
 

        if (!$token = auth()->attempt($credentials)) 
        {
           return response()->json(['error' => 'No autorizado'], '401');
        }

         return response()->json(['token' => $token]);
    }

    public function register (Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'required|string|max:255',
            'email'    => 'required|email',
            'password' => 'required|string|min:8|max:16',
            'phone'    => 'required|string|max:12'
        ]);
 
        if ($validator->fails()) 
        {
            return response()->json(['error' => 'No autorizado'], '401');
        }

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'phone'    => $request->phone
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json([
            'message' => 'User creado',
            'token' => $token,
        
        ], '201');

    }

    public function logout()
    {
        JWTAuth::invalidate(JWTAuth::getToken());
        return response()->json(['message' => 'Successfully logged out']);
    }

    public function refresh()
    {
        $token = JWTAuth::refresh(JWTAuth::getToken());
        return response()->json(compact('token'));
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SocialAuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();
        
        $user = User::firstOrCreate([
            'email' => $googleUser->getEmail(),
        ], [
            'name' => $googleUser->getName(),
            'password' => Hash::make(uniqid()),
        ]);

        Auth::login($user);
        //\Log::info('Usuario autenticado con Google');
        $token = \Tymon\JWTAuth\Facades\JWTAuth::fromUser($user);
        return redirect("http://127.0.0.1:8001/auth/callback?token=$token");
    }

    public function googleApiLogin(Request $request)
    {
        $request->validate([
            'id_token' => 'required|string',
        ]);
    
        $client = new \Google_Client(['client_id' => env('GOOGLE_CLIENT_ID')]);
        $payload = $client->verifyIdToken($request->id_token);
    
        if (!$payload) 
        {
            return response()->json(['error' => 'Token inválido'], 401);
        }
    
        $user = \App\Models\User::where('email', $payload['email'])->first();
        if (!$user) 
        {
            $user = \App\Models\User::create([
                'name'     => $payload['name'] ?? $payload['email'],
                'email'    => $payload['email'],
                'password' => \Illuminate\Support\Facades\Hash::make(uniqid()),
                'phone'    => '50212345678', // Valor por defecto para phone
            ]);
        }
    
        $token = \Tymon\JWTAuth\Facades\JWTAuth::fromUser($user);
    
        return response()->json(['token' => $token, 'user' => $user]);
    }
}

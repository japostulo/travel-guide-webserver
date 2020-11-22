<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {   
        
        $user = User::where('email', $request->email)->first();
        
        if ($user){
            if(Hash::check($request->password, $user->password))
            {   
                $token = $user->createToken('token-name');
                return response()->json([
                    'token' => $token->plainTextToken,
                    'user' => [
                        'name' => $user->name,
                        'id' => $user->id,
                        'email' => $user->email,
                    ]
                ]);
            }
        }
        return response()->json(['error' => 'Falha de acesso'], 403);

    }

    public function logout(Request $request){
        $user = User::find($request->id);

        $user->tokens()->delete();

        return response()->json(["success" => "deslogado"]);

   }

}
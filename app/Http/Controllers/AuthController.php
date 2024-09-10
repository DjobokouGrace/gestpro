<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
   public function createUser(Request $request){
    $val = $request -> validate([
        "name" => "required",
        "email" => "required",
        "password" => "required",

    ]);
    $user = User::create([
        "name" => $val["name"],
        "email" => $val["email"],

        "password" => Hash::make($val["password"]),
    ]);
    return response([
        "code"=>200,
        "message" => "Nouveau user créé",
        "data" => $user
    ], 200);
   }
   public function listUser(){
    $list = User::get();
    return response([
        "code"=> 200,
        "message" => "Liste de tous les users",
        "data" =>$list
    ], 200);
   }
   public function Auth(Request $request){
     $validate = $request -> validate([
        "email" => "required",
        "password" => "required"
     ]);

     if(!Auth::attempt($validate))
        {
            return response([
                'code'=>400,
                'message'=>'FAILURE',
                'description' => 'identifiants incorrects'
            ], 403);
        }

        //return user & token in response
        return response([
            'code'=>200,
            'user' =>auth()->user(),
            'token' => auth()->user()->createToken('secret')->plainTextToken
        ], 200);
   }
}

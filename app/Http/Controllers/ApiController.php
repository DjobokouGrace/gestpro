<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function Home(){
        return response([
            "code"=>201,
            "message"=>"code succès !",
            "description"=>"Bienvenue sur ma première API"
        ],201);
    }

    public function Mine(Request $request){
        $prenom = $request->input('prenom');
        return response([
            "code"=>200,
            "message"=>"code succès !",
            "description"=>"Le prénom est: " . $prenom
        ], 200);
        
    }
}

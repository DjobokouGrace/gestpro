<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function Createcate(Request $request){
        $nom = $request -> validate([
            "nom_categorie" => "required",
            "description_categorie" => "required"
        ]);
        $enter = Categorie::create([
            "nom_categorie" => $nom['nom_categorie'],
            "description_categorie" => $nom['description_categorie']
        ]);

        return response([
            "code" =>200,
            "message" => "Nouvelle categorie créée !",
            "data" => $enter
        ], 200);
    }

    public function Listcate(){
        $allcatelist = Categorie::all();

        return response ([
            "code" =>200,
            "message" => "Voici la liste de toutes les catégories",
            "data"=> $allcatelist
        ], 200);
    }

    public function Deletecate($cate){
        $findid= Categorie::find($cate);

        if($findid){
            $findid -> delete();
            return response([
                "code" => 200,
                "message" =>"Catégorie  ".$cate." bien supprimée !",
            ], 200);
        }else {
            return response ([
                "code" => 500,
                "message" => "Id catégorie inexistant dans la base !"
            ]);
        }
    }


    

    public function Updatecate(Request $request, $cate){
        $findid = Categorie::find($cate);

        if($findid){
            $val = $request -> validate([
                "nom_categorie" => "required",
                "description_categorie" => "required"
            ]);
            $cateup = $findid -> update([
                "nom_categorie" => $val['nom_categorie'],
                "description_categorie" => $val['description_categorie']
            ]);

            return response([
                "code" => 200,
                "message" => "Categorie ".$cate." mise à jour ! Bravo !",
                "data" => $findid
            ], 200);

        }else {
            return response ([
                "code" => 500,
                "message" => "Id categorie inexistant dans la base !"
            ]);
        }
    }
}

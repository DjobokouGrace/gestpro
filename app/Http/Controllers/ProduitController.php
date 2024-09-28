<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    //api
    public function Createprod(Request $request){
        $validation = $request -> validate([
            "nom_produit" => " required",
            "description_produit" => "required",
            "prix_produit" => "required",
            "categorie_id" => "required",
        ]);

        $findidcate = Categorie::find($validation['categorie_id']);
        if($findidcate){
            $enter = Produit::create([
                "nom_produit" => $validation['nom_produit'],
                "description_produit" => $validation['description_produit'],
                "prix_produit" => $validation['prix_produit'],
                "categorie_id" => $validation['categorie_id']
            ]);
    
            return response([
                "code" =>200,
                "message" => "Produit créé avec succès !",
                "data" => $enter
            ], 200);
        }else {
            return response([
               "code" => 500,
                "message"=>"Id de catégorie inexistant pour créer ce produit!"
            ]);
        }
        
    }
    //web 
    public function store(Request $request){
        $validation = $request -> validate([
            "nom_produit" => " required",
            "description_produit" => "required",
            "prix_produit" => "required",
            "categorie_id" => "required",
        ]);

        $findidcate = Categorie::find($validation['categorie_id']);
        if($findidcate){
            $enter = Produit::create([
                "nom_produit" => $validation['nom_produit'],
                "description_produit" => $validation['description_produit'],
                "prix_produit" => $validation['prix_produit'],
                "categorie_id" => $validation['categorie_id']
            ]);
    
                   // Redirection vers la page d'affichage du produit créé
            return redirect()->route('products.show', ['id' => $enter->id])
            ->with('success', 'Produit créé avec succès !');
        }else {
            return view('list_product');
        }
        
    }

    // Méthode pour afficher le produit créé
    public function show($id)
    {
        // Récupération du produit par son ID
        $product = Produit::findOrFail($id);

        // Affichage de la vue avec les détails du produit
        return view('products.show', compact('product'));
    }


    public function Listprod(){
        $list= Produit::latest()->take(1)->get();

        return response([
            "code" =>200,
            "message" => "Voici la liste des produits",
            "data" => $list
        ], 200);
      
    }
    //prod
    public function Listproduct(){
        $list= Produit::all();

        return view('listproduct', $list);
      
    }

    public function Deleteprod($prod){
        $findidprod = Produit::find($prod);

            if($findidprod){
                $findidprod -> delete();
                return response([
                "code"=>200,
                "message"=> "Suppression produit ". $prod. " réussie"

            ], 200);
            }else{
                return response([
                    "code"=>500,
                    "message"=> "Ce produit n'existe pas dans la base !"
                ]);
            }
        
    }

    public function Updateprod(Request $request, $prod){
        $findproduit = Produit::find($prod);
            if($findproduit){

                $validation = $request -> validate([
                    "nom_produit" => " required",
                    "description_produit" => "required",
                    "prix_produit" => "required",
                    "categorie_id" => "required",
                ]);
                $findidcate = Categorie::find($validation['categorie_id']);
                if($findidcate){
                    $enter = $findproduit->update([
                        "nom_produit" => $validation['nom_produit'],
                        "description_produit" => $validation['description_produit'],
                        "prix_produit" => $validation['prix_produit'],
                        "categorie_id" => $validation['categorie_id']
                    ]);

                    return response([
                        "code" =>200,
                        "message" => "Produit ".$prod." modifié avec succès !",
                        "data" => $findproduit
                    ], 200);
                }else{
                
        
               
                return response([
                    "code"=>500,
                    "message"=> "Id categorie ".$findidcate." inexistant dans la base !"
        
                ]);
                }
            }else {
                return response([
                    "code"=>500,
                    "message" => "Id produit ".$findproduit." inexistant dans la base !"
                ]);
            }
    }


}

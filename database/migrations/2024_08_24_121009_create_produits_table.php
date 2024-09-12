<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom_produit');
            $table->string('description_produit');
            $table->integer('prix_produit');
            $table->foreignId('categorie_id');
            $table->timestamps();
        });
        //Ici nous activons la clé étrangère dans produit. C'est-à-dire qu'une
        //contrainte d'intégrité est soulevée chaque fois qu'on veut toucher un produit 
        //appartenant à une categorie
        Schema::enableForeignKeyConstraints();
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produits', function(Blueprint $table){
            $table->dropConstrainedForeignId('categorie_id');
        });

        Schema::dropIfExists('produits');
    }
};

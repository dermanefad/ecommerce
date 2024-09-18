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
        Schema::create('produits_favoris', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');   // Clé étrangère pour l'utilisateur
            $table->unsignedBigInteger('produit_id'); // Clé étrangère pour les produits
            $table->timestamps();
    
            // Clé étrangère vers la table `users`
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    
            // Clé étrangère vers la table `produits`
            $table->foreign('produit_id')->references('id')->on('produits')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits_favoris');
    }
};

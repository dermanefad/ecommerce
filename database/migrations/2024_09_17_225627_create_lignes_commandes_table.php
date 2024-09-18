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
        Schema::create('lignes_commandes', function (Blueprint $table) {
            $table->id();
            $table->integer('quantite');                 // Quantité achetée
            $table->decimal('prix', 10, 2);              // Prix unitaire du produit
            $table->timestamps();
            $table->unsignedBigInteger('commande_id');   // Clé étrangère vers `commandes`
            $table->unsignedBigInteger('produit_id');    // Clé étrangère vers `produits`
            $table->foreign('commande_id')->references('id')->on('commandes')->onDelete('cascade');
            $table->foreign('produit_id')->references('id')->on('produits')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lignes_commandes');
    }
};

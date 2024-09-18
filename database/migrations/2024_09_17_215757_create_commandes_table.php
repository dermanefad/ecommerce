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
            Schema::create('commandes', function (Blueprint $table) {
                $table->id();
                $table->decimal('montant_total', 8, 2);
                $table->enum('statut', ['en attente', 'expédiée', 'livrée', 'annulée']);
                $table->timestamps();
        
                // Clé étrangère vers la table `users`
                $table->unsignedBigInteger('user_id');  // Clé étrangère pour l'utilisateur
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};

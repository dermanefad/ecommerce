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
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();     // Photo de profil
            $table->date('date_de_naissance')->nullable();
            $table->text('biographie')->nullable();
            $table->string('genre')->nullable();     // Genre : Homme, Femme, etc.
            $table->timestamps();
    
            // Clé étrangère vers la table `users`
            $table->unsignedBigInteger('user_id');  // Clé étrangère pour l'utilisateur
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profils');
    }
};

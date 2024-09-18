<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adresses_livraison extends Model
{
    protected $fillable = [
        'user_id', 'adresse', 'ville', 'code_postal', 'pays'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function commande()
    {
        return $this->belongsTo(Commande::class);
    }
}

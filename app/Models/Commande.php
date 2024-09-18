<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'total', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lignesCommandes()
    {
        return $this->hasMany(Lignes_commande::class);
    }

    public function adresseLivraison()
    {
        return $this->hasOne(Adresses_livraison::class);
    }

    public function paiement()
    {
        return $this->hasOne(Paiement::class);
    }
}

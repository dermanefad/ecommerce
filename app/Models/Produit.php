<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = ['categorie_id', 'nom', 'description', 'prix', 'stock'];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function lignesCommandes()
    {
        return $this->hasMany(Lignes_commande::class);
    }
}

<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    use HasFactory, Notifiable;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'mot_de_passe',
        'adresse_id',
        'telephone',
    ];

    // Relation avec la table 'adresses'
    public function adresse()
    {
        return $this->belongsTo(Adresse::class);
    }

    // Relation avec la table 'commandes'
    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }

    // Relation avec la table 'produits_favoris'
    public function produitsFavoris()
    {
        return $this->belongsToMany(Produit::class, 'produits_favoris');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}

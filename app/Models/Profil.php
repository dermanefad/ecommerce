<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'photo',
        'date_de_naissance',
        'biographie',
        'genre',
    ];

    // Relation inverse avec la table `users`
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

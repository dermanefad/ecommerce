<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'adresse', 'ville', 'code_postal', 'pays', 'type' // 'type' peut être 'livraison' ou 'facturation'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

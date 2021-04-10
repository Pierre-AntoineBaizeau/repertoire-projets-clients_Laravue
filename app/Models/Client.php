<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;


    protected $fillable = [
        'description',
        'raison_sociale',
        'statut_juridique',
        'capital',
        'numero_siret',
        'code_naf',
        'pays',
        'adresse',
        'code_postal',
        'ville',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projets extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'client_id',
        'nom_responsable',
        'prenom_responsable',
        'telephone_responsable',
        'email_responsable',
        'description',
        'titre',
        'start',
        'end',
        'statut_du_projet' ,
        'nombre_jours_vendus'
    ];
}

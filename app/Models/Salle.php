<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    protected $table = 'salles'; // Nom de la table dans la base de données
    protected $fillable = ['salleID']; // Attributs remplissables

    // Autres propriétés et méthodes du modèle...
}

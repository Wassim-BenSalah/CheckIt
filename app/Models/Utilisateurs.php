<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Utilisateurs extends Model implements Authenticatable
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'matricule';

    // Définition du type de données du matricule comme une chaîne de caractères
    protected $casts = [
        'matricule' => 'string',
    ];

    // Liste des attributs pouvant être mass assignable
    protected $fillable = [
        'matricule',
        'password',
        'nom',
        'prenom', // Ajoutez prenom à la liste fillable
        'email',
        'role',
        'etat',
    ];
    
    public function getAuthIdentifierName()
    {
        return $this->primaryKey;
    }

    public function getAuthIdentifier()
    {
        return $this->{$this->getAuthIdentifierName()};
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return null; // Cette méthode n'est pas utilisée dans votre cas, donc retourner null est correct
    }

    public function setRememberToken($value)
    {
        // Cette méthode n'est pas utilisée dans votre cas, donc vous pouvez laisser vide
    }

    public function getRememberTokenName()
    {
        return ''; // Cette méthode n'est pas utilisée dans votre cas, donc retourner une chaîne vide est correct
    }
}

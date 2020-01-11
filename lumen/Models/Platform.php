<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model {

    // Voici la convention d'Eloquent pour pouvoir appeler une table dans une BDD
    // ne pas oublier la convention "snake case" que Eloquent à mis en place qui met au pluriel le nom de la Classe
    protected $table = 'platform';

    // Eloquent met ici par défaut les colonnes created_at updated_at même si il ne sont pas dans BDD pour remédier à cela il faut mettre en place un timestamp

    public $timestamps = false;


}

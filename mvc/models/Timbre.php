<?php
namespace App\Models;
use App\Models\CRUD;

class Timbre extends CRUD {

    protected $table = 'timbre';
    protected $primaryKey = 'id';
    protected $fillable = ['nom', 'description', 'annee', 'pays', 'certifie', 'etat_timbre', 'utilisateur_id'];

    
}

?>

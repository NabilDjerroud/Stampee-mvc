<?php

namespace App\Models;

use App\Models\CRUD;

class Enchere extends CRUD
{
    protected $table = 'enchere';
    protected $primaryKey = 'id';
    protected $fillable = ['coup_de_coeur', 'date_mise', 'mise_encours', 'timbre_id'];

 
}
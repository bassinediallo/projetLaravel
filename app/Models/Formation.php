<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $table = 'formations';

    protected $primaryKey = 'id';
    protected $fillable = ['INFORMATIQUE', 'COMPTABILITE', 'MEDECINE', 'DROIT'];
    
}




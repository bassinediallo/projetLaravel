<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    protected $table = 'apprenants';
    protected $fillable = ['nom', 'prenom'];
}

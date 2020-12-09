<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastro_web extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'idade', 'função'];
}

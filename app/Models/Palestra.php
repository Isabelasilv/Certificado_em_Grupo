<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Palestra extends Model
{
    protected $fillable = [ 'tema','palestrante','periodo','cidade','horas' ];
}

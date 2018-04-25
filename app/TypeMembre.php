<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeMembre extends Model
{
    protected $fillable = ['nom'];

    public $timestamps = [];
}

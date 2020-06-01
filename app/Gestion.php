<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gestion extends Model
{
    public $table = 'gestion';
    protected $fillable = ['consumo', 'fecha','vencimiento', 'periodo'];
   
}

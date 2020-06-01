<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//el modeo debe tener el mismo nombre que la tabla db
//orm
class Proyect extends Model
{
    protected $table = 'user';
    protected $fillable = ['title', 'descripcion'];
}

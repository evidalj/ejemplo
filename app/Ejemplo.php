<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ejemplo extends Model
{
    protected $table = "personas";
    protected $hidden = ['created_at','updated_at'];
}

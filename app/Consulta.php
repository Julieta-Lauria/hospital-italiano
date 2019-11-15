<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    public $table = "consultas";
    public $timestamps = false;
    public $guarded = [];
}

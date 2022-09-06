<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    protected $table = 'tc_rol';
    protected $primaryKey = 'rol_id';
    public $timestamps = false;
    protected $fillable = ['descripccion'];
}

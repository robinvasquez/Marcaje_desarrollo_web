<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    protected $table = 'tc_empleado';
    protected $primaryKey = 'empleado_id';
    public $timestamps = true;
    protected $fillable = ['nombre','apellido','rol_id','puesto','correo','clave'];

}

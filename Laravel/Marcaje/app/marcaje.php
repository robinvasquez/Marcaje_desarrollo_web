<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class marcaje extends Model
{
    protected $table = 'tt_marcaje';
    protected $primaryKey = 'marcaje_id';
    public $timestamps = true;
    protected $fillable = ['empleado_id','tipo_id'];

}
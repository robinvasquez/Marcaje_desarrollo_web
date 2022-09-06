<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class tipo extends Model
{
    protected $table = 'tc_tipo';
    protected $primaryKey = 'tipo_id';
    public $timestamps = false;
    protected $fillable = ['descripccion'];

    public function tipo()
    {
        return $this->belongsToMany(tipo::class, 'tt_order_detail', 'product_id', 'order_id');
    }
}

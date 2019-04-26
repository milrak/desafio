<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Protudo extends Model
{
    protected $fillable = ['nome','descricao','valorVenda','quantidade', 'ativo'];
    protected $table = 'produtos';
    protected $date = ['created_at ','updated_at ','deleted_at'];

    public $timestamps = true;

    function categoria() { 
        return $this->belongsTo('App\CategoriaProduto');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome','descricao','valorVenda','quantidade', 'ativo','categoriaProduto_id'];
    protected $table = 'produtos';
    protected $date = ['created_at ','updated_at ','deleted_at'];

    public $timestamps = true;

    function categoria() {
        return $this->belongsTo('App\CategoriaProduto');
    }

}

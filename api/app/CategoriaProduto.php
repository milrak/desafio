<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaProduto extends Model
{
    protected $fillable = ['nome', 'ativo'];
    protected $table = 'categoria_produtos';
    protected $date = ['created_at ','updated_at ','deleted_at'];

    public $timestamps = true;

    //Tem muitos
    public function produto()
    {
        return $this->hasMany('App\Produto');
    }
}

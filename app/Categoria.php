<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    Protected $table = 'categorias';

    Protected $fillable = [
        'id',
        'nombre'
    ];
    // relacion de productos
    public function producto(){
        return $this->HashMany('App\Producto');
    }
}

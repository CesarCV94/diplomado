<?php

namespace App;
use App\Categoria;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    Protected $table = 'productos';

    Protected $fillable = [
        'id',
        'nombre',
        'precio',
        'categorias_id'
    ];
    
    // relacion de categorias
    public function categoria(){
        return $this->belongsTo('App\Categoria','id');
    }

    //consulta
    protected function consulta(){
        return $categorias = Categoria::all();
    }
}

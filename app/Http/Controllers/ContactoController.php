<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index($nombre,$edad){
        
        return view('contacto',compact('nombre','edad'));
    }
}

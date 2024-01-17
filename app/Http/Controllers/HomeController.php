<?php
//este archivo se crea con el comando php artisan make:controller HomeController
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){  
        //__invoke es un metodo magico que se ejecuta cuando se llama a la clase.
        // invoke se usa cuando se administra SOLO UNA RUTA
        //return view('home');
        return view('home');//se puede usar el metodo view() para llamar a una vista
    }
}

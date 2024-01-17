<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //no se usa invoke, porque va a administrar varias rutas
    public function index(){  //por convencion se usa index
        //return view('home');
        return view('cursos.index');//se puede usar el metodo view() para llamar a una vista);
    }

    public function create(){ 
        return view('cursos.create');
    }   
    
    public function show($curso){ //por convencion se usa show
        return view('cursos.show', compact('curso'));   
        //se usa compact para mandar la variable curso a la vista.
        // es una forma corta de escribir ['curso'=>$curso]
        
    }
        
}

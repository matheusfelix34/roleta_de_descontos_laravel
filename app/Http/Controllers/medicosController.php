<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class medicosController extends Controller
{
    protected $pag='roleta';

    public function GetMedicos(){

        return "teste";
    }

    public function index(){

        return view("view.roleta.index");
    }
    
}

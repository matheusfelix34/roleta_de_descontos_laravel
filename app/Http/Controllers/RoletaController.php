<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoletaController extends Controller
{
    // public function GetMedicos(){

    //     return view("index2");
    // }

    // public function index(){

    //     return view("teste");
    // }
    // public function roleta(){

    //     return view("roleta_2");
    // }
    
    public function child()
    {
       return view('roleta');
    }


}

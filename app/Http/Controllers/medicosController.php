<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class medicosController extends Controller
{
    public function GetMedicos(){

        return "teste";
    }

    public function index(){

        return view("index");
    }
}

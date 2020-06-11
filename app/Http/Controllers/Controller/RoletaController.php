<?php

namespace App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoletaController extends Controller
{
    protected $pag='roleta';


    public function index(){

        return view("view.roleta.index");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function create(){
        return view('create');
    }

    public function show(){
        return view('show');
    }

}

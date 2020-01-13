<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller1 extends Controller
{
    public function index() {

      $prova = "Hello World";

      return view('welcome', compact('prova'));
    }
}

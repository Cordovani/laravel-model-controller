<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    //la funzione risponde attraverso il controller alla Route in web.php
    public function index(){
        return view("movie");
    }

}

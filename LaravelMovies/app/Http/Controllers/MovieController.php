<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//prima della dichiarazione del Controller il namespace per il Model
use App\Movie;

class MovieController extends Controller
{
    //la funzione risponde attraverso il controller alla Route in web.php
    // public function index(){
    //     //passiamo un array alla 
    //     $data = [
    //         "name" => "Fabio"
    //     ];

    //     return view("welcome",$data);
    // }

    //posso passare i dati anche con il metodo compact()
    public function index(){
        $moviesData = Movie::all();
        
        return view("movies",[
            'listaMovies'=> $moviesData
        ]);
    }

    // public function allMovie(){
    //     $movies = Movie::all();
    // }


}

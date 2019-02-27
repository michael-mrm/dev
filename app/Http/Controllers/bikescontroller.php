<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\bikes;

class bikescontroller extends Controller
{
    public function index(){
        $bikes = bikes::all();        
        return view('bikes.index', ['bikes' => $bikes]);
    }
}

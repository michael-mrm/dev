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
    public function create(){     
        return view('bikes.create');
    }
    public function show(){     
     
    }    
    public function store(){   
        //return request()->all();
        $bikes = new bikes();  
        $bikes->brand = request('brand');
        $bikes->model = request('model');
        $bikes->price = request('price');
        $bikes->save();  
        return redirect('/bikes');
    }
    public function edit($id){     
        $bikes = bikes::findorfail($id);  
        return view('bikes.edit',['bikes' => $bikes]);
    }
    public function update($id){     
        $bikes = bikes::findorfail($id);      
        $bikes->brand = request('brand');
        $bikes->model = request('model');
        $bikes->price = request('price');
        $bikes->save();  
        return redirect('/bikes');
    }
    public function delete($id){     
        bikes::findorfail($id)->delete();
        return redirect('/bikes');          
    }    
}

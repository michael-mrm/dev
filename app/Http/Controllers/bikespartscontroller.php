<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\bikes;
use App\Parts;

class bikespartscontroller extends Controller
{
    public function store($id){   
        $bikes = bikes::findorfail($id);         
        $validated = request()->validate(['description' => ['required','min:2','max:255']]);                   
        $Parts = Parts::create([
            'bikes_id' => $id,
            'description' => request('description')
        ]);   
        return back();
    }    
    public function update($id){    
        $parts = Parts::findorfail($id);
        $iscompleted = ['completed' => request()->has('completed')];          
        $parts->update($iscompleted);  
        return back();
    }
}

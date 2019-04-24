<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\bikes;
use App\Parts;

class bikespartscontroller extends Controller
{
    public function authparts(){
        $this->middleware('auth');  
        if(auth()->id()){
            return true;
        }else{
            abort(403, 'Authentication required.');
        }
    }
    public function store($id){  
        $this->authparts(); 
        $bikes = bikes::findorfail($id);         
        $validated = request()->validate(['description' => ['required','min:2','max:255']]);                   
        $Parts = Parts::create([
            'bikes_id' => $id,
            'description' => request('description')
        ]);   
        return back();
    }    
    public function update($id){    
        $this->authparts(); 
        $parts = Parts::findorfail($id);
        if (!($iscompleted = ['completed' => request()->has('completed')])){
            $iscompleted = ['completed' => false];
        }  
        $parts->update($iscompleted);  
        return back();
    }
}

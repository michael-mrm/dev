<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\bikes;

class bikescontroller extends Controller
{
    public function flash($message){
        session()->flash('message',$message);
    }
    public function authbikes(){
        $this->middleware('auth');  
        if(auth()->id()){
            return true;
        }else{
            abort(403, 'Authentication required.');
        }
    }
    public function validbikes(){   
        return  $validated = request()->validate([
            'brand' => ['required','min:2','max:255'],'model' => ['required','min:2','max:255'],'price' => ['required','min:4','max:8']
        ]);
    }
    public function index(){      
        $bikes = bikes::all();       
        return view('bikes.master', ['bikes' => $bikes]);
    }
    public function create(){          
        $this->authbikes();                   
        return view('bikes.create');
    }
    public function show($id){  
        $bikes = bikes::findorfail($id);  
        return view('bikes.show',['bikes' => $bikes]);
    }
    public function store(){
        $this->authbikes();
        $validated = $this->validbikes();
        $validated['owner_id'] = auth()->id();
        bikes::create($validated);   
        $this->flash('your bike has been added');
        return redirect('/bikes');
    }
    public function edit($id){   
        $this->authbikes();  
        $bikes = bikes::findorfail($id);  
        return view('bikes.edit',['bikes' => $bikes]);
    }
    public function update($id){
        $this->authbikes();
        $bikes = bikes::findorfail($id);
        $this->authorize('update',$bikes);  
        $validated = $this->validbikes();
        $bikes->update($validated);  
        $this->flash('your bike has been updated');
        return redirect('/bikes');
    }
    public function delete($id){  
        $this->authbikes();   
        $bikes = bikes::findorfail($id);
        $this->authorize('delete',$bikes);
        $bikes->delete();
        $this->flash('your bike has been deleted');
        return redirect('/bikes');          
    }    
}

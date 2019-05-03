<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\bikes;
use App\Http\Resources\BikesResource as BikesResource;

class DataController extends Controller
{
    public function index(){    
        $bikes = bikes::orderBy('created_at','dec')->paginate(5);
        return BikesResource::collection($bikes);
    }
}

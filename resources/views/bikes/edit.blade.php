@extends('bikes.display')
@section('content')
    <h3>edit bike</h3>
    <form method="post" action="/updatebikes/{{$bikes->id}}">
        {{method_field('patch')}}
        {{csrf_field()}}
        <div>
            <input type="text" name="brand" placeholder="bike brand" value="{{$bikes->brand}}">
        </div>
        <div>
            <input type="text" name="model" placeholder="bike model" value="{{$bikes->model}}">
        </div>
        <div>
            <input type="text" name="price" placeholder="bike price" value="{{$bikes->price}}">
        </div>   
        <button type="submit">update bike</button>
    </form>
    <form method="post" action="/deletebikes/{{$bikes->id}}">
        {{method_field('delete')}}
        {{csrf_field()}}  
        <button type="submit">delete bike</button>
    </form>    
@endsection
@extends('bikes.master')
@section('content')
    @foreach ($bikes as $bikes)        
    <div class="bike-item">
        <h3>{{$bikes->brand}}</h3>
        <h5>{{$bikes->model}}</h5>
        <p>{{$bikes->price}}</p>
        <ul>
            <li class="items"><a href="/showbikes/{{$bikes->id}}">select bike</a></li>
        </ul>
        <br/>
    </div>
    @endforeach
@endsection


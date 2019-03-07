@extends('bikes.display')
@section('content')
<div class="bike-item">
    <h3>{{$bikes->brand}}</h3>
    <h5>{{$bikes->model}}</h5>
    <p>{{$bikes->price}}</p>
    <ul>
        <li><a href="/editbikes/{{$bikes->id}}">edit bike</a></li>
    </ul>
    <br/>
</div>
@endsection

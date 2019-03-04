@extends('layout')
@section('content')
    @foreach ($bikes as $bikes)
    <h3>{{$bikes->brand}}</h3>
    <h5>{{$bikes->model}}</h5>
    <p>{{$bikes->price}}</p>
    @endforeach
@endsection

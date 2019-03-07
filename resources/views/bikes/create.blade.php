@extends('bikes.display')
@section('content')
    <form method="post" action="/storebikes">
    {{csrf_field()}}
        <div>
            <input type="text" name="brand" placeholder="bike brand">
        </div>
        <div>
            <input type="text" name="model" placeholder="bike model">
        </div>
        <div>
            <input type="text" name="price" placeholder="bike price">
        </div>   
        <button type="submit">create bike</button>
    </form>
    @if ($errors->any())
    <div class="alert alert-warning">
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
    @endif
@endsection

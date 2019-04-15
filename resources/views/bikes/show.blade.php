@extends('bikes.display')
@section('content')
<div class="bike-item">
    <h3>{{$bikes->brand}}</h3>
    <h5>{{$bikes->model}}</h5>
    <p>{{$bikes->price}}</p>

    <div>
        @foreach ($bikes->parts as $part)  
        <form method="POST" action="/parts/{{$part->id}}">
            {{csrf_field()}}
            @method('PATCH')
            <div class="parts-item">
                <input type="checkbox" name="completed" onChange="this.form.submit()" {{$part->completed ? 'checked' : ''}}>
                <label class="checkbox" for="completed">
                    {{$part->description}}
                </label>                
            </div>
        </form>
        @endforeach
    </div>  
    <br/>  
    <form method="POST" action="/storeparts/{{$bikes->id}}">
        {{csrf_field()}}
        <div>
            <input type="text" name="description" placeholder="part description" value="">
        </div> 
        <button type="submit">add new part</button>
    </form>
    <br/>
      @if ($errors->any())
    <div class="alert alert-warning">
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
    @endif    
    <ul>
        <li><a href="/editbikes/{{$bikes->id}}">edit bike</a></li>
    </ul>
    <br/>
</div>
@endsection

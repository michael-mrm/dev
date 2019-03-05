@extends('bikes.display')
@section('content')
<table>
    <tr>     
    <td>
        <h3>{{$bikes->brand}}</h3>
        <h5>{{$bikes->model}}</h5>
        <p>{{$bikes->price}}</p>
        <br/>
        <ul>
            <li><a href="/editbikes/{{$bikes->id}}">edit bike</a></li>
        </ul>
        <br/>
    </td>    
    </tr>
</table>
@endsection

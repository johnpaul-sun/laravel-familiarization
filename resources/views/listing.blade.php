@extends('layout')

@section('content') 
<li>{{$list['title']}}
    <ul>
        <li>{{$list['description']}}</li>
    </ul>
</li>
<button><a href="../">Go back</a></button>
@endsection
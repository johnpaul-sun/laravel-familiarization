@extends('layout')

@section('content') 
<h1>{{$heading}}</h1>
<ul>
    @if(count($listings) === 0)
    <p>No listings found</p>
    @endif

    @foreach ($listings as $list)
    <li><a href="/listing/{{$list['id']}}">{{$list['title']}}</a>
        <ul>
            <li>{{$list['description']}}</li>
        </ul>
    </li>
    @endforeach
</ul>
@endsection
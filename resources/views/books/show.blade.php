@extends('layouts.app')

@section('content')

    <h1>{{$book->name}}</h1>
    <p><b>Pages:</b> {{$book->pages}}</p>
    <p><b>ISBN:</b> {{$book->isbn}}</p>
    <p><b>Price:</b> {{$book->price}} T</p>
    <p><b>Paublished at:</b> {{$book->publishedat}}</p>

@endsection

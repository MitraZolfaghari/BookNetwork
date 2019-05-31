@extends('layouts.app')

@section('content')
<div class="container">
    <h1>List of Books</h1>

    <div class="row mt-4">
        @foreach($books as $book)
            <div class="col-md-3">
                <div class="card mb-4 shadow-sm py-3 px-3 bookname">
                    <a href={{"books/".$book->id}}>{{$book->name}}</a>
                    Price: {{$book->price}} T
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
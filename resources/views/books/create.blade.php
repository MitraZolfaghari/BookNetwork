@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <h5 class="card-title">Add Book</h5>
            <form method="post" action="{{route('books.store')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="pages">Pages</label>
                    <input type="text" class="form-control" name="pages" id="pages" value="{{old('pages')}}" placeholder="Pages">
                </div>
                <div class="form-group">
                    <label for="isbn">ISBN</label>
                    <input type="text" class="form-control" name="isbn" id="isbn" value="{{old('isbn')}}" placeholder="ISBN">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" name="price" id="price" value="{{old('price')}}" placeholder="Price">
                </div>
                <div class="form-group">
                    <label for="publishedat">Published at</label>
                    <input type="text" class="form-control" name="publishedat" id="publishedat" value="{{old('publishedat')}}" placeholder="publishedat">
                </div>

                @include('books.error')

                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
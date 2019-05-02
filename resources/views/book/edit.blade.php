@extends('master')

@section('content')
    <div class="col-sm-12">
        <h4 class="text-left">Editting book#{{ $book->id }}</h4>
        <a href="{{ route('book.show', ['id'=>$book->id] ) }}">Back</a>
        <form action="{{ route('book.bookupdate', ['id'=>$book->id] ) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Input the book title here." value="{{ $book->title }}" required>
            </div>
            <div class="form-group">
                <label for="title">Description</label>
                <input type="text" class="form-control" name="description" placeholder="Input the book description here." value="{{ $book->description }}" required>
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="edit">
        </form
    </div>
@endsection


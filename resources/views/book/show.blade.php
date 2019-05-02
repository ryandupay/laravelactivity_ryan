@extends('master')

@section('content')
<div class="container">
   <h2> Book # {{ $book->id }}: {{ $book->title }} </h2>
   
   <p>{{ $book->description }}</p>
   <p>Votes: {{ $book->votes->count() }}</p>

   <a role="button" class="btn btn-warning" href="{{ route('book.edit', ['id'=>$book->id] ) }}">Edit</a>
   <a role="button" class="btn btn-dark" href="{{ route('books') }}">Back</a>
</div>
@endsection
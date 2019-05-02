@extends('master')

@section('content')
<div class="container">
   <h2> Book # {{ $book->id }}: {{ $book->title }} </h2>
   <a href="{{ route('book.edit', ['id'=>$book->id] ) }}">Edit</a>
   <a href="{{ route('books') }}">Back</a>
   <p>{{ $book->description }}</p>
</div>
@endsection
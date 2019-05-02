@extends('master')

@section('content')
    <div class="col-sm-12">
        <h2 class="text-center"> List of all the books titles </h2>
        
        <div class="text-center mb-5">
            <a class="btn btn-info" role="button" href="{{ route('book.create') }}">Create a book</a>
        </div>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Options</th>
                <th>Votes</th>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr> 
                        <td><a href="{{ route('book.show', ['id'=>$book->id] ) }}">{{ $book->id }}</a></td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->description }}</td>
                        <td>
                            <a class="btn btn-success" role="button" href="{{ route('book.upvote', ['id' => $book->id]) }}">Upvote</a>
                            <a class="btn btn-warning {{ $book->votes->count() == 0 ? 'disabled' : '' }}" role="button" href="{{ route('book.downvote', ['id' => $book->id]) }}" >Downvote</a>
                            <a class="btn btn-dark" role="button"  href="{{ route('book.delete', ['id'=>$book->id] ) }}">Delete</a>
                        </td>
                        <td>{{ $book->votes->count() }}</td>
                    </tr>
                @endforeach

                @empty($book)
                    <tr> 
                        <td colspan="3">There are no books yet! Try creating one </td>
                    </tr>
                @endempty
            </tbody>
        </table>
    </div>
@endsection

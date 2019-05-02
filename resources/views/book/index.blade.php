@extends('master')

@section('content')
    <div class="col-sm-12">
        <h2 class="text-center"> List of all the books titles </h2>
        
        <div class="text-center">
            <a href="{{ route('book.create') }}">Create a book</a>
        </div>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr> 
                        <td><a href="{{ route('book.show', ['id'=>$book->id] ) }}">{{ $book->id }}</a></td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->description }}</td>
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

@extends('master')

@section('content')
    <div class="col-sm-12">
        <h4 class="text-left">Create a book</h4>

        <form action="{{ route('book.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Input the book title here." required>
            </div>
            <div class="form-group">
                <label for="title">Description</label>
                <input type="text" class="form-control" name="description" placeholder="Input the book description here." required>
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="create">
        </form>

        <a role="button" class="btn btn-dark" href="{{ route('books') }}">Back</a>
    </div>
@endsection


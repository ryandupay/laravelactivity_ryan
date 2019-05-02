<?php

namespace App\Http\Controllers;

use App\Book;
use App\Vote;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
        //    $books = Book::all();
        $books = Book::all();
        // dd($books);

        return view('book/index', compact('books')); 
    }

   public function create()
   {
       return view('book/create');
   }

   public function store(Request $request)
    {
        $book = new Book();
        $book->title = $request->input('title');
        $book->description = $request->input('description');
        $book->save();
        return redirect('books');
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('book/show', compact('book'));
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('book/edit', compact('book'));
    }

    public function bookupdate($id, Request $request)
    {
        $book = Book::find($id);
        $book->title = $request->input('title');
        $book->description = $request->input('description');
        $book->update();
        return view('book/show', compact('book'));
    }

    public function delete($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect('books');
    }

    public function upvote($id)
    {
       $book = Book::find($id);
       $vote = new Vote();
       $book->votes()->save($vote);

       return redirect()->route('books');
    }

    public function downvote($id)
    {
        $book = Book::find($id);
        $vote = $book->votes()->latest()->first();
        $vote->delete();

       return redirect()->route('books');
    }

}

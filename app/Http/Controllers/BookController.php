<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests\SaveBookForm;

class BookController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth')->only('create'); 
    }

    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(SaveBookForm $request)
    {
       $request->validate();
       $book =  Book::create($request->except('_token'));
       return redirect('books/');
    }
}

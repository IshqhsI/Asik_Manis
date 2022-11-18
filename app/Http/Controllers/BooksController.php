<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        return view('books', [
            "title" => "Daftar Buku",
            "books" => Book::with('author')->latest()->get()
        ]);
    }

    public function single(Book $book)
    {
        return view("book", [
            "title" => "Detail Buku",
            "books" => $book,
            "author" => $book->author
        ]);
    }
}

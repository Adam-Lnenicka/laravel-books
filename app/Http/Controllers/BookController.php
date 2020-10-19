<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $books = DB::select('SELECT * from `books`');

        //return $books;
        return view('books/index', compact('books'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class EshopController extends Controller
{
    public function index()
    {
        $books = $books = DB::select('SELECT * from `books`');
        return view('eshop.index', compact('books'));
    }

    public function category()
    {

        $books = DB::select('SELECT * from `books` where `category_id` = 1');

        return view('eshop.category', compact('books'));
    }

    public function subcategory()
    {

        $books = DB::select('SELECT * from `books`');

        return view('eshop.subcategory', compact('books'));
    }
}

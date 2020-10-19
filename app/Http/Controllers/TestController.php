<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        $name = 'Joe';

//        return view('test/test')->with('user', 'Joe');
        return view('test/test')->with('user', $name);


    }
}

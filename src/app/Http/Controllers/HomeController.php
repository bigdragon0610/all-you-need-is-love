<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $test = 'hello world';
        return view('index', compact('test'));
    }
}

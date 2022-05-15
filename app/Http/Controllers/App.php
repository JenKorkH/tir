<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class App extends Controller
{
    public function showIndex()
    {
        return view('pages.index');
    }

    public function showAbout()
    {
        return view('pages.about');
    }
}

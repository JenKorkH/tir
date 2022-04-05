<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class App extends Controller
{
    public function show()
    {
        return view('pages.index');
    }

}

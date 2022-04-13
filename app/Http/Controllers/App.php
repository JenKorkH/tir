<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class App extends Controller
{
    public function showIndex()
    {
        return view('pages.index');
    }
    public function showCertificates()
    {
        return view('pages.certificates');
    }
    public function showCertificate()
    {
        return view('pages.certificate');
    }
    public function showAbout()
    {
        return view('pages.about');
    }
}

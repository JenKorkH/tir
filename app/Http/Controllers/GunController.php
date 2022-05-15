<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GunController extends Controller
{
    public function showGuns()
    {
        return view('pages.guns');
    }
    public function showGun()
    {
        return view('pages.gun');
    }
}

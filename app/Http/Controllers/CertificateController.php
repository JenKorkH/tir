<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function showCertificates()
    {
        return view('pages.certificates');
    }
    public function showCertificate()
    {
        return view('pages.certificate');
    }
}

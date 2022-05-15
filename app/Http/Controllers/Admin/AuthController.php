<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => ["required", "email", "string"],
            "password" => ["required"]
        ]);
        if(auth("admin")->attempt($data))
        {
            return redirect(route("admin.index"));
        }

        return redirect(route("admin.login"))->withErrors(["email" => "Пользователь не найдет"]);
    }

    public function logout()
    {
        auth("admin")->logout();
        return redirect(route("home"));
    }
}

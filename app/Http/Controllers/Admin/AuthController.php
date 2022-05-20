<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function index()
    {
        $gunCount = DB::table('guns')->count();
        //$certificateCount = DB::table('certificate')->count();
        return view('admin.index', [
            'gunCount' => $gunCount,
        ]);
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

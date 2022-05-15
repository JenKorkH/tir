<?php

namespace App\Http\Controllers;


use App\Mail\ForgotPassword;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('logpages.login');
    }
    public function showRegisterForm()
    {
        return view('logpages.register');
    }
    public function showForgotForm()
    {
        return view('logpages.forgot');
    }
    public function logout()
    {
        auth("web")->logout();
        return redirect(route("home"));
    }
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => ["required", "email", "string"],
            "password" => ["required"]
        ]);
        if(auth("web")->attempt($data))
        {
            return redirect(route("home"));
        }

        return redirect(route("login"))->withErrors(["email" => "Пользователь не найдет"]);
    }
    public function register(Request $request)
    {
        $data = $request->validate([
            "email" => ["required", "email", "string", "unique:users,email"],
            "password" => ["required", "confirmed"],
            'fname' =>["required"],
            'sname' => ["required"],
            'pname' => ["required"],
            "phone" => ["required"]
        ]);

        $user = User::create([
            'fname' => $data["fname"],
            "sname" => $data["sname"],
            "pname" => $data["pname"],
            "email" => $data["email"],
            "phone" => $data["phone"],
            "password" => bcrypt($data["password"]),
            "created_at" => Carbon::now()
        ]);
        if($user){

            auth("web")->login($user);

        }
        return redirect(route("home", compact('user')));
    }

    public function forgot(Request $request)
    {
        $data = $request->validate([
            "email" => ["required", 'email', 'string', 'exists:users']
        ]);

        $user = User::where(["email" => $data["email"]])->first();

        $password = uniqid();

        $user->password = bcrypt($password);
        $user->save();

        Mail::to($user)->send(new ForgotPassword($password));

        return redirect(route("home"));

    }

    public function showProfile()
    {
        return view("pages.profile");
    }
}

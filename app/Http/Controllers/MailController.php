<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendReset(Request $request)
    {

        $data = $request->validate([
            "email" => ["required", 'email', 'string', 'exists:users'],
        ]);

        $user = User::where(["email" => $data["email"]])->first();

        $password = uniqid();

        $user->password = bcrypt($password);

        $user->save();

        Mail::to($user)->send(new forgotPassword($password));

    }
}

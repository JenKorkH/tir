@extends('layouts.login-layout')

@section('title', 'Авторизация')

@section('content')

    <!--SIGN-IN-FORM---------------------------------->
    <main class="form-signin">
        <form action="{{ route("admin.login_process") }}" method="post">
            @csrf
            <h1 class="h3 mb-3 fw-normal text-center">Вход в админ-панель</h1>
            <div class="form-floating">
                <input name="email" type="email" class="form-control" @error("email") style="border: 2px solid #dc3545" @enderror id="floatingInput" placeholder="name@example.com">
                @error('email')
                    <p style="color: #dc3545">{{ $message }}</p>
                @enderror
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input name="password" type="password" class="form-control" @error("password") style="border: 2px solid #dc3545" @enderror id="floatingPassword" placeholder="Password">
                @error('password')
                    <p style="color: #dc3545">{{ $message }}</p>
                @enderror
                <label for="floatingPassword">Пароль</label>
            </div>
            <button class="w-100 btn btn-lg btn-danger" type="submit">Войти</button>
        </form>
    </main>

@endsection

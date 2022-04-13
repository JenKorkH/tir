@extends('layouts.login-layout')

@section('title', 'Авторизация')

@section('content')
    <!--SIGN-UP-FORM--------------------------------->
    <main class="form-signin">
        <form action="{{ route("register_process") }}" method="post">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Регистрация</h1>
            <div class="form-floating">
                <input name="sname" class="form-control" placeholder="name@example.com">
                @error('sname')
                    <p style="">{{ $message }}</p>
                @enderror
                <label for="floatingInput">Фамилия</label>
            </div>
            <div class="form-floating">
                <input name="fname" class="form-control" placeholder="name@example.com">
                @error('fname')
                    <p style="">{{ $message }}</p>
                @enderror
                <label for="floatingInput">Имя</label>
            </div>
            <div class="form-floating">
                <input name="pname" class="form-control" placeholder="name@example.com">
                @error('pname')
                    <p style="">{{ $message }}</p>
                @enderror
                <label for="floatingInput">Отчество</label>
            </div>
            <div class="form-floating">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                @error('email')
                    <p style="">{{ $message }}</p>
                @enderror
                <label for="floatingInput">Email</label>
            </div>
            <div class="input-group" style="margin-bottom: 10px;">
                <span class="input-group-text" id="addon-wrapping">+380</span>
                <input name="phone" type="text" class="form-control input-number" id="" placeholder="68-868-6888" aria-label="Username" aria-describedby="addon-wrapping"  style="padding: 15px 0;">
                @error('phone')
                    <p style="">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                @error('password')
                    <p style="">{{ $message }}</p>
                @enderror
                <label for="floatingPassword">Пароль</label>
            </div>
            <div class="form-floating">
                <input name="password_confirmation" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                @error('password_confirmation')
                    <p style="">{{ $message }}</p>
                @enderror
                <label for="floatingPassword">Подтвердите пароль</label>
            </div>
            <button class="w-100 btn btn-lg btn-danger" type="submit" style="margin-top: 20px;">Зарегистрироваться</button>
            <p class="mt-3 mb-3 text">Или</p>
            <div class="border-bottom" style="margin: 10px"></div>
        </form>
        <a href="{{ route("login") }}" class="col-5 btn btn btn-danger w-100">Войти</a>
    </main>

@endsection

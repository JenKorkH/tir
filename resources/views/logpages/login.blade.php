@extends('layouts.login-layout')

@section('title', 'Авторизация')

@section('content')

    <!--SIGN-IN-FORM---------------------------------->
    <main class="form-signin">
        <form action="{{ route("login_process") }}" method="post">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Вход</h1>
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
            <div class="checkbox mb-3" style="padding-top: 15px;">
                <label><input type="checkbox" value="remember-me" style="margin-right: 5px;">Запомнить меня</label>
            </div>
            <button class="w-100 btn btn-lg btn-danger" type="submit">Войти</button>
            <p class="mt-3 mb-3 text">Или</p>
            <div class="border-bottom" style="margin: 10px"></div>
        </form>
        <div class="text-center">
            <a href="" class="col-5 btn btn btn-danger" data-bs-toggle="modal" data-bs-target="#recover__form">Востановить</a>
            <a href="{{ route("register") }}" class="col-5 btn btn btn-danger">Регистрация</a>
        </div>

    </main>

    <!--MODAL-RECOVER-FORM--------------------------->
    <div class="modal fade" id="recover__form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Восстановление</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"><hr>
                    <form>
                        <div class="reserve__content">
                            <div class="reserve__instruction">Для восстановления пароля введите свой e-mail, который вы указали при регистрации</div>
                            <div class="reserve__input" style="margin: 20px 0;">
                                <div class="input-group flex-nowrap reserve__input-email">
                                    <span class="input-group-text" id="addon-wrapping">Email</span>
                                    <input type="text" class="form-control" id="" placeholder="example@gmail.com" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                            <button href="" class="col btn btn btn-danger w-100">Восстановить</button>
                        </div>
                    </form>
                </div><hr>
            </div>
        </div>
    </div>

@endsection

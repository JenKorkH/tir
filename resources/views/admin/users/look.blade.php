@extends('layouts.admin-layout')

@section('title', 'Перегляд користувача')

@section('content')

    <div class="container" style="margin-top: 20vh;">

        <div class="row" style="display: flex; justify-content: center">
            <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10 col-xs-10 align-center" style="">
                <div class="profile__image">
                    <img class="profile__image-inner" src="/images/1.jpg" alt="">
                </div>
                <div class="profile__image-change" style="margin-top: 40px; display: flex; justify-content: center;">
                    <a href="{{ route('admin.users.index') }}" type="button" class="btn btn-success" style="width: 100%;">Повернутися</a>

                </div>
                <div class="profile__image-change" style="margin-top: 40px; display: flex; justify-content: center">
                    <form method="post" action="{{ route('admin.users.destroy', $user->id) }}" style="width: 100%;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger text-white" style="margin-right: 10px; align-items: center; width: 100%"><img src="/images/delete.png" alt=""> Видалити</button>
                    </form>
                </div>
            </div>
            <div class="col-xl align-center">
                <div class="profile__inner">
                    <p><span style="color: #dc3545; padding-right: 10px;">Профіль:</span>{{ $user->email }}</p>
                    <p><span style="color: #dc3545; padding-right: 10px;">ПІБ: </span>{{ $user->sname." ".$user->fname." ".$user->pname }}</p>
                    <p><span style="color: #dc3545; padding-right: 10px;">Role:</span> користувач</p>
                    <p><span style="color: #dc3545; padding-right: 10px;">Дата народження:</span> {{ $user->birthday }}</p>
                    <p><span style="color: #dc3545; padding-right: 10px;">Пошта:</span> {{ $user->email }}</p>
                    <p><span style="color: #dc3545; padding-right: 10px;">Номер телефону:</span> {{ $user->phone }}</p>
                    <p><span style="color: #dc3545; padding-right: 10px;">Кількість сертифікатів:</span>0</p>
                    <p><span style="color: #dc3545; padding-right: 10px;">Кількість програм:</span>0</p>
                    <p><span style="color: #dc3545; padding-right: 10px;">Кількість записів:</span>0</p>
                    <p><span style="color: #dc3545; padding-right: 10px;">Створений:</span>{{ $user->created_at }}</p>
                </div>



@endsection

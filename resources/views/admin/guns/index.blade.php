@extends('layouts.admin-layout')

@section('title', 'Админ панель')

@section('content')

    <!--INDEX-ADMIN---------------------------------->
    <main>
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
            <a href="{{ route('admin.index') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none" style="margin: 0 auto;">
                <span class="fs-4">Админ панель</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <div class="dropdown">
                    <a class="nav-link text-white dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" style="background-color: #dc3545;">
                        <img src="/images/rifle-color.png" alt="">
                        Оружие
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item active" href="#">Все оружия</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.guns.create') }}">Добавить</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="nav-link text-white dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown">
                        <img src="/images/certificate-color-2.png" alt="">
                        Сертификаты
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item active" href="#">Все сертификаты</a></li>
                        <li><a class="dropdown-item" href="#">Добавить</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="nav-link text-white dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown">
                        <img src="/images/certificate-color.png" alt="">
                        Программы
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item active" href="#">Все программы</a></li>
                        <li><a class="dropdown-item" href="#">Добавить</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="nav-link text-white dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown">
                        <img src="/images/instructor-color.png" alt="">
                        Инструктора
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item active" href="#">Все инструктора</a></li>
                        <li><a class="dropdown-item" href="#">Добавить</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="nav-link text-white dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown">
                        <img src="/images/man-color.png" alt="">
                        Пользователи
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item active" href="#">Все пользователи</a></li>
                        <li><a class="dropdown-item" href="#">Добавить</a></li>
                    </ul>
                </div>
            </ul>
            <hr>
            <a href="{{ route('admin.logout') }}" class="d-flex align-items-center text-white text-decoration-none">
                <img src="/images/logout.png" alt=""> <span style="padding-left: 10px;"> Выход</span>
            </a>

        </div>
        <div class="b-example-divider"></div>

        <div class="container-fluid" style="">
            <div style="padding-top: 5px; margin-bottom: 40px;"></div>
            <h3>Всё оружие</h3>

            <div style="background-color: #fff; padding: 15px; border-radius: 5px;">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Тип</th>
                        <th scope="col">Модель</th>
                        <th scope="col">Калибр</th>
                        <th scope="col">Магазин</th>
                        <th scope="col">Вес с пт</th>
                    </tr>
                    </thead>
                    @foreach($guns as $gun)
                        <tbody>
                            <tr class="table__col">
                                <th scope="row">{{ $gun->id }}</th>
                                <td >{{ $gun->type }}</td>
                                <td>{{ $gun->name }}</td>
                                <td>{{ $gun->caliber }}</td>
                                <td>{{ $gun->clip }}</td>
                                <td>{{ $gun->weight_bullet }}</td>
                                <td style="text-align: right;">
                                    <a  href="{{ route('admin.guns.edit', $gun->id) }}" type="button" class="btn btn-warning btn-sm text-white" style="margin-right: 10px; align-items: center;"><img src="/images/edit.png" alt=""> Редактировать</a>
                                    <a type="button" class="btn btn-danger btn-sm text-white" style="margin-right: 10px; align-items: center;"><img src="/images/trash.png" alt=""> Удалить</a>
                            </tr>
                        </tbody>
                    @endforeach

                </table>
                <div>
                    {{ $guns->links() }}
                </div>
            </div>
        </div>

    </main>

@endsection

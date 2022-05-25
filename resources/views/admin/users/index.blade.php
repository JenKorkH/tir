@extends('layouts.admin-layout')

@section('title', 'Користувачі')

@section('content')

    <!--INDEX-ADMIN---------------------------------->
    <main>
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
            <a href="{{ route('admin.index') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none" style="margin: 0 auto;">
                <span class="fs-4">Адмін панель</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <div class="dropdown">
                    <a class="nav-link text-white dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown">
                        <img src="/images/rifle-color.png" alt="">
                        Зброя
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item active" href="{{ route('admin.guns.index') }}">Вся зброя</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.guns.create') }}">Додати зброю</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('admin.brands.index') }}">Всі бренди </a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.brands.create') }}">Додати бренд </a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('admin.category.index') }}">Всі категорії </a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.category.create') }}">Додати категорію </a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="nav-link text-white dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown">
                        <img src="/images/certificate-color-2.png" alt="">
                        Сертифікати
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item active" href="{{ route('admin.certificates.index') }}">Всі сертифікати</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.certificates.create') }}">Додати сертифікат</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="nav-link text-white dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown">
                        <img src="/images/certificate-color.png" alt="">
                        Програми
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item active" href="#">Всі програми</a></li>
                        <li><a class="dropdown-item" href="#">Додати програму</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="nav-link text-white dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown">
                        <img src="/images/instructor-color.png" alt="">
                        Інструктори
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item active" href="{{ route('admin.instructors.index') }}">Всі инструктори</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.instructors.create') }}">Додати інструктора</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="nav-link text-white dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" style="background-color: #dc3545;">
                        <img src="/images/man-color.png" alt="">
                        Користувачі
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item active" href="{{ route('admin.users.index') }}">Всі користувачі</a></li>
                    </ul>
                </div>
            </ul>
            <hr>
                <a href="{{ route('admin.logout') }}" class="d-flex align-items-center text-white text-decoration-none">
                    <img src="/images/logout.png" alt=""> <span style="padding-left: 10px;"> Вихід</span>
                </a>

        </div>
        <div class="b-example-divider"></div>
        <div class="container-fluid" style="">
            <div style="padding-top: 5px; margin-bottom: 40px;"></div>
            <h3>Всі користувачі</h3>

            <div style="background-color: #fff; padding: 15px; border-radius: 5px;">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ПІБ</th>
                        <th scope="col">Дата народження</th>
                        <th scope="col">Пошта</th>
                        <th scope="col">Номер</th>
                    </tr>
                    </thead>
                    @foreach($users as $user)
                        <tbody>
                        <tr class="table__col">
                            <th scope="row">{{ $user->id }}</th>
                            <td >{{ $user->sname." ".$user->fname." ".$user->pname }}</td>
                            <td >{{ $user->birthday }}</td>
                            <td >{{ $user->email }}</td>
                            <td >{{ $user->phone }}</td>
                            <td style="text-align: right;" style="display: flex">
                                <a  href="{{ route('admin.users.show', $user->id) }}" type="button" class="btn btn-success btn-sm text-white" style="margin-right: 10px; align-items: center;"><img src="/images/see.png" alt=""> Передивитися</a>
                            </td>
                            <td>
                                <form method="post" action="{{ route('admin.users.destroy', $user->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm text-white" style="margin-right: 10px; align-items: center;"><img src="/images/delete.png" alt=""> Видалити</button>
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
                <div>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </main>

@endsection

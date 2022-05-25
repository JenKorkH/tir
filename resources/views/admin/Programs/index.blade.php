@extends('layouts.admin-layout')

@section('title', 'Програми')

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
                    <a class="nav-link text-white dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" >
                        <img src="/images/certificate-color-2.png" alt="">
                        Сертифікати
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item active" href="{{ route('admin.certificates.index') }}">Всі сертифікати</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.certificates.create') }}">Додати сертифікат</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="nav-link text-white dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" style="background-color: #dc3545;">
                        <img src="/images/certificate-color.png" alt="">
                        Програми
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item active" href="{{ route('admin.programs.index') }}">Всі програми</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.programs.create') }}">Додати програму</a></li>
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
                    <a class="nav-link text-white dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown">
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
            <h3>Всі інструктори</h3>

            <div style="background-color: #fff; padding: 15px; border-radius: 5px;">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Назва</th>
                        <th scope="col">Інструктор</th>
                        <th scope="col">Категорія</th>
                        <th scope="col">Уроків</th>
                        <th scope="col">Ціна</th>
                        <th scope="col">Опис</th>
                    </tr>
                    </thead>
                    @foreach($programs as $program)
                        <tbody>
                        <tr class="table__col">
                            <th scope="row">{{ $program->id }}</th>
                            <td >{{ $program->name }}</td>
                            <td >{{ DB::table('instructors')->where('id', $program->instructor_id)->value('name') }}</td>
                            <td>{{ DB::table('categories')->where('id', $program->category_id)->value('name') }}</td>
                            <td>{{ $program->lessons }}</td>
                            <td>{{ $program->price }}</td>
                            <td>{{ mb_strimwidth($program->about, 0, 20, '...') }}</td>
                            <td style="text-align: right;">
                                <form method="post" action="{{ route('admin.changeStateProgram', $program->id) }}">
                                    @csrf
                                    <button type="submit" class="btn @if($program->state == true)btn-success @else btn-danger @endif btn-sm text-white" style="margin-right: 10px; align-items: center;"><img src="/images/active.png" alt=""> @if($program->state == true)Активний @else Неактивний @endif</button>
                                </form>
                            </td>
                            <td style="text-align: right;">
                                <a  href="{{ route('admin.programs.edit', $program->id) }}" type="button" class="btn btn-warning btn-sm text-white" style="margin-right: 10px; align-items: center;"><img src="/images/edit.png" alt=""> Редагувати</a>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach

                </table>
                <div>
                    {{ $programs->links() }}
                </div>
            </div>
        </div>
    </main>

@endsection
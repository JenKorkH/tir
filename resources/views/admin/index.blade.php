@extends('layouts.admin-layout')

@section('title', 'Адмін панель')

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
                        <li><a class="dropdown-item active" href="#">Всі сертифікати</a></li>
                        <li><a class="dropdown-item" href="#">Додати сертифікат</a></li>
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
                        <li><a class="dropdown-item active" href="{{ route('admin.instructors.index') }}">Всі інструктори</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.instructors.create') }}">Додати</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="nav-link text-white dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown">
                        <img src="/images/man-color.png" alt="">
                        Користувачі
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item active" href="#">Всі користувачі</a></li>
                    </ul>
                </div>
            </ul>
            <hr>
                <a href="{{ route('admin.logout') }}" class="d-flex align-items-center text-white text-decoration-none">
                    <img src="/images/logout.png" alt=""> <span style="padding-left: 10px;"> Вихід</span>
                </a>

        </div>
        <div class="b-example-divider"></div>
        <div class="container-fluid" style="margin: 15px;">
            <h3>Головна</h3>
            <div class="row" style="margin-bottom: 30px;">
                <div class="col-xl col-lg-10 col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto; margin-bottom:20px;">
                    <div class="admin__card" style="background-color: #17a2b8;">
                        <a href="{{ route('admin.guns.index') }}" class="admin__card-link">
                            <div class="admin__card-info">
                                <div class="admin__card-count">{{ $gunCount }}</div>
                                <span>@if($gunCount > 5) Зброй @else Зброї @endif </span>
                            </div>
                            <div class="admin__card-image">
                                <img src="/images/rifle.png" alt="" class="card__image">
                            </div>
                        </a>
                        <div class="admin__card-all" style="background-color: #1a8b9c;"><a href="{{ route('admin.guns.index') }}">Вся зброя</a></div>
                    </div>
                </div>
                <div class="col-xl col-lg-10 col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto; margin-bottom:20px;">
                    <div class="admin__card" style="background-color: #28a745;">
                        <a href="" class="admin__card-link">
                            <div class="admin__card-info">
                                <div class="admin__card-count">5</div>
                                <span>Сертифікатів</span>
                            </div>
                            <div class="admin__card-image">
                                <img src="/images/certificate.png" alt="" class="card__image">
                            </div>
                        </a>
                        <div class="admin__card-all" style="background-color: #169434;"><a href="">Всі сертифікати</a></div>
                    </div>
                </div>
                <div class="col-xl col-lg-10 col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto; margin-bottom:20px;">
                    <div class="admin__card" style="background-color: #ffc107;">
                        <a href="" class="admin__card-link">
                            <div class="admin__card-info">
                                <div class="admin__card-count">5</div>
                                <span>Програм</span>
                            </div>
                            <div class="admin__card-image">
                                <img src="/images/document.png" alt="" class="card__image">
                            </div>
                        </a>
                        <div class="admin__card-all" style="background-color: #e4b21b;"><a href="">Всі програми</a></div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 30px; margin: 0 auto;">
                <div class="col-xl col-lg-10 col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto; margin-bottom:20px;">
                    <div class="admin__card" style="background-color: #be443b;">
                        <a href="" class="admin__card-link">
                            <div class="admin__card-info">
                                <div class="admin__card-count">100</div>
                                <span>Користувачів</span>
                            </div>
                            <div class="admin__card-image">
                                <img src="/images/user.png" alt="" class="card__image">
                            </div>
                        </a>
                        <div class="admin__card-all" style="background-color: #bd3127;"><a href="">Всі користувачі</a></div>
                    </div>
                </div>

                <div class="col-xl col-lg-10 col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto; margin-bottom:20px;">
                    <div class="admin__card" style="background-color: #db570a;">
                        <a href="" class="admin__card-link">
                            <div class="admin__card-info">
                                <div class="admin__card-count">13</div>
                                <span>Інструкторів</span>
                            </div>
                            <div class="admin__card-image">
                                <img src="/images/man.png" alt="" class="card__image">
                            </div>
                        </a>
                        <div class="admin__card-all" style="background-color: #c5500d;"><a href="">Всі інструктори</a></div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

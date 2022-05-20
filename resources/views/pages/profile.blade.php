@extends('layouts.main-wo-contact-layout')

@section('title', 'Спортивно-стрелковый клуб')

@section('content')

    <!--MAIN-PROFILE--------------------------------->
    <div class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html" style="text-decoration: none; color: #000;">Головна</a></li>
                <li class="breadcrumb-item active" aria-current="page">Профіль
                </li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="border-bottom" style="padding-top: 0px; margin-bottom: 40px;"></div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10 col-xs-10 align-center" style="">
                <div class="profile__image">
                    <img class="profile__image-inner" src="/images/1.jpg" alt="">
                </div>
                <div class="profile__image-change" style="margin-top: -40px;">
                    <button type="button" class="btn btn-secondary">Змінити фото</button>
                </div>
            </div>
            <div class="col-xl align-center">
                <div class="profile__inner">
                    <p><span style="color: #dc3545;">Профіль:</span>kazheepro</p>
                    <p><span style="color: #dc3545;">ПІБ: </span>Корчев Евгений</p>
                    <p><span style="color: #dc3545;">Role:</span> користувач</p>
                </div>
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true" style="color: #dc3545; font-family: 'Open Sans', sans-serif;">Профіль</button>
                        <button class="nav-link " id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" style="color: #dc3545; font-family: 'Open Sans', sans-serif;">Сертифікати</button>
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false" style="color: #dc3545; font-family: 'Open Sans', sans-serif;">Учбові програми</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="profile__change">
                            <form action="">
                                <div class="row">
                                    <div class="col">
                                        <div class="reserve__name">Прізвище</div>
                                        <div class="input-group flex-nowrap reserve__input-name">
                                            <input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="reserve__name">Ім'я</div>
                                        <div class="input-group flex-nowrap reserve__input-name">
                                            <input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="reserve__name">По батькові</div>
                                        <div class="input-group flex-nowrap reserve__input-name">
                                            <input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="reserve__name">Дата народження</div>
                                        <div class="input-group flex-nowrap reserve__input-name">
                                            <input type="date" class="form-control"  aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="reserve__name">Пошта</div>
                                        <div class="input-group flex-nowrap reserve__input-name">
                                            <input class="form-control"  aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="reserve__name">Номер телефону</div>
                                        <div class="input-group flex-nowrap reserve__input-name">
                                            <input class="form-control"  aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-4"><button class="w-100 btn btn-lg btn-danger" type="submit" style="margin-top: 20px;">Редагувати</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <table class="table profile__table-certificate">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Назва</th>
                                <th scope="col">Дата придбання</th>
                                <th scope="col">Дата активації</th>
                                <th scope="col">Статус</th>
                                <th scope="col">Переглянути</th>
                                <th scope="col">Активувати</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Назва</td>
                                <td>29-03-2019</td>
                                <td>29-10-2020</td>
                                <td>Активований</td>
                                <td><a href="" class="profile__active-see"><img src="/images/see.png" alt=""> передивитися</a></td>
                                <td><a href="" class="profile__active-see"><img src="/images/activate.png" alt=""> активація</a></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Название</td>
                                <td>29-03-2019</td>
                                <td>29-10-2020</td>
                                <td>Активирован</td>
                                <td><a href="" class="profile__active-see"><img src="/images/see.png" alt=""> передивитися</a></td>
                                <td><a href="" class="profile__active-see"><img src="/images/activate.png" alt=""> активація</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <table class="table profile__table-certificate">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Название</th>
                                <th scope="col">Инструктор</th>
                                <th scope="col">Дата приобретения</th>
                                <th scope="col">Дата окончания</th>
                                <th scope="col">Просмотреть</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Название</td>
                                <td>Нечепуренко</td>
                                <td>29-03-2019</td>
                                <td>29-10-2020</td>
                                <td><a href="" class="profile__active-see"><img src="/images/see.png" alt=""> посмотреть</a></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Название</td>
                                <td>Нечепуренко</td>
                                <td>29-03-2019</td>
                                <td>29-10-2020</td>
                                <td><a href="" class="profile__active-see"><img src="/images/see.png" alt=""> посмотреть</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-bottom" style="padding-top: 62px; margin-bottom: 40px;"></div>
    </div>

@endsection

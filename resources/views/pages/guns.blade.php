@extends('layouts.main-wo-contact-layout')

@section('title', 'Спортивно-стрелковый клуб')

@section('content')

    <div class="border-bottom" style="padding-top: 62px; margin-bottom: 40px;"></div>

    <!--MAIN-PROFILE--------------------------------->
    <div class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route("home")}}" style="text-decoration: none; color: #000;">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Оружие
                </li>

            </ol>
        </nav>
    </div>

    <div class="container gun-all">
        <div class="gun-all__filter">
            <div class="gun-all__filter-item">
                <span style="margin-bottom: 10px;">Тип оружия</span>
                <label class="gun-all__input"><input type="checkbox"><span>Автомат</span> </label>
                <label class="gun-all__input"><input type="checkbox"><span>Пистолет</span> </label>
                <label class="gun-all__input"><input type="checkbox"><span>Гладкоствольное ружье</span> </label>
            </div>
            <div class="gun-all__filter-item">
                <span style="margin-bottom: 10px;">Бренд</span>
                <label class="gun-all__input"><input type="checkbox"><span>Glock</span> </label>
                <label class="gun-all__input"><input type="checkbox"><span>S&W</span> </label>
                <label class="gun-all__input"><input type="checkbox"><span>Remington</span> </label>
            </div>
            <div class="gun-all__filter-item">
                <span style="margin-bottom: 10px;">Калибр</span>
                <label class="gun-all__input"><input type="checkbox"><span>.40 S&W</span> </label>
                <label class="gun-all__input"><input type="checkbox"><span>9mm</span> </label>
                <label class="gun-all__input"><input type="checkbox"><span>40ACP</span> </label>
            </div>
            <div class="gun-all__filter-item">
                <span style="margin-bottom: 10px;">Калибр</span>
                <label class="gun-all__input"><input type="checkbox"><span>.40 S&W</span> </label>
                <label class="gun-all__input"><input type="checkbox"><span>9mm</span> </label>
                <label class="gun-all__input"><input type="checkbox"><span>40ACP</span> </label>
            </div>


        </div>
        <div class="gun-all__filter-buttons">
            <button type="button" class="btn btn-light button__order"  style="">Найти</button>
            <button type="button" class="btn btn-light button__order"  style="">Сброс</button>
        </div>
        <div class="border-bottom" style="margin: 30px 0;"></div>

        <div class="row justify-content-center" style="margin: 20 auto;">
            <div class="col-xl col-lg-5 col-md-5 col-sm-10 col-xs-10 align-center">
                <div class="gun-all__item">
                    <img src="/images/guns/bajkal.jpg" alt="" class="gun-all__image">
                    <div class="gun-all__title">Glock-35</div>
                    <div class="gun-all__slug">Модификация знаменитого пистолета Glock-17, отличающаяся от него увеличенным калибром (.40 Smith&Wesson) и увеличенной длиной ствола (135 мм). Glock-35 - это превосходная точность и повышенная мощность, при этом отдача у него остается в необходимых для комфортной стрельбы пределах.</div>
                    <hr>
                    <div class="gun-all__feature">
                        <div>.40 S&W</div>
                        <div>17 патронов</div>
                        <div>1,02 кг</div>
                    </div>
                    <hr>
                    <div style="display: flex;">
                        <button type="button" class="btn btn-danger button__order"  style=" margin-right: 20px;">Подробнее</button>
                        <button type="button" class="btn btn-danger button__order"  style="">Записаться</button>
                    </div>
                </div>
            </div>
            <div class="col-xl col-lg-5 col-md-5 col-sm-10 col-xs-10 ">
                <div class="gun-all__item">
                    <img src="/images/guns/bajkal.jpg" alt="" class="gun-all__image">
                    <div class="gun-all__title">Glock-35</div>
                    <div class="gun-all__slug">Модификация знаменитого пистолета Glock-17, отличающаяся от него увеличенным калибром (.40 Smith&Wesson) и увеличенной длиной ствола (135 мм). Glock-35 - это превосходная точность и повышенная мощность, при этом отдача у него остается в необходимых для комфортной стрельбы пределах.</div>
                    <hr>
                    <div class="gun-all__feature">
                        <div>.40 S&W</div>
                        <div>17 патронов</div>
                        <div>1,02 кг</div>
                    </div>
                    <hr>
                    <div style="display: flex;">
                        <button type="button" class="btn btn-danger button__order"  style="margin-right: 20px;">Подробнее</button>
                        <button type="button" class="btn btn-danger button__order"  style="">Записаться</button>
                    </div>
                </div>
            </div>
            <div class="col-xl col-lg-5 col-md-5 col-sm-10 col-xs-10 ">
                <div class="gun-all__item">
                    <img src="/images/guns/bajkal.jpg" alt="" class="gun-all__image">
                    <div class="gun-all__title">Glock-35</div>
                    <div class="gun-all__slug">Модификация знаменитого пистолета Glock-17, отличающаяся от него увеличенным калибром (.40 Smith&Wesson) и увеличенной длиной ствола (135 мм). Glock-35 - это превосходная точность и повышенная мощность, при этом отдача у него остается в необходимых для комфортной стрельбы пределах.</div>
                    <hr>
                    <div class="gun-all__feature">
                        <div>.40 S&W</div>
                        <div>17 патронов</div>
                        <div>1,02 кг</div>
                    </div>
                    <hr>
                    <div style="display: flex;">
                        <button type="button" class="btn btn-danger button__order"  style=" margin-right: 20px;">Подробнее</button>
                        <button type="button" class="btn btn-danger button__order"  style="">Записаться</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-bottom" style="margin: 30px 0;"></div>
    </div>

@endsection

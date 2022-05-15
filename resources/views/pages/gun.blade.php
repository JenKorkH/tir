@extends('layouts.main-wo-contact-layout')

@section('title', 'Спортивно-стрелковый клуб')

@section('content')


    <div class="border-bottom" style="padding-top: 62px; margin-bottom: 40px;"></div>

    <!--MAIN-PROFILE--------------------------------->

    <div class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route("home") }}" style="text-decoration: none; color: #000;">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{ route("guns") }}" style="text-decoration: none; color: #000;">Оружие</a></li>
                <li class="breadcrumb-item active" aria-current="page">TANFOGLIO WITNESS 1911
                </li>
            </ol>
        </nav>
        <div class="border-bottom" style="margin: 30px 0;"></div>
        <div class="row">

            <div class="col-xl-4 col-lg-4 col-md-10 col-sm-10 col-xs-10 text-center" style="margin: 0 auto;">
                <div id="gunCarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#gunCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#gunCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#gunCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="/images/1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="/images/2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#gunCarousel"  data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#gunCarousel"  data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Следующий</span>
                    </button>
                </div>
                <button type="button" class="btn btn-danger button__order"  style="">Записаться на стрельбу</button>
                <button type="button" class="btn btn-danger button__order"  style="">В избранное</button>
                <hr>
                <div class="gun__about" style="text-align: left;">
                    <div class="gun__about-item">
                        <div class="about__title" >Калибр</div>
                        <div class="about__value">.45</div>
                    </div>

                    <div class="gun__about-item">
                        <div class="about__title" >Вес без патронов</div>
                        <div class="about__value">1,1 кг</div>
                    </div>

                    <div class="gun__about-item">
                        <div class="about__title" >Вес с патронами</div>
                        <div class="about__value">1,16 кг</div>
                    </div>

                    <div class="gun__about-item">
                        <div class="about__title" >Общая длина</div>
                        <div class="about__value">222 мм</div>
                    </div>

                    <div class="gun__about-item">
                        <div class="about__title" >Общая высота</div>
                        <div class="about__value"></div>
                    </div>

                    <div class="gun__about-item">
                        <div class="about__title" >Общая ширина</div>
                        <div class="about__value"></div>
                    </div>

                    <div class="gun__about-item">
                        <div class="about__title" >Магазин</div>
                        <div class="about__value">8 патронов</div>
                    </div>

                    <div class="gun__about-item">
                        <div class="about__title" >Длина ствола</div>
                        <div class="about__value">128 мм</div>
                    </div>

                    <div class="gun__about-item">
                        <div class="about__title" >Нарезка ствола</div>
                        <div class="about__value"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl col-lg col-md-10 col-sm-10 col-xs-10 gun__text" style="margin: 20px auto;">
                <div class="gun__text-about">
                    <h1>TANFOGLIO WITNESS 1911</h1>
                    <p>Производство легендарного пистолета Кольт классической модели 1911 A1 (Colt Model 1911A1) началось в 1924 году. На протяжении всего XX века конструкция постоянно совершенствовалась, имеет множество разновидностей в зависимости от производителя. Модель активно использовали гангстеры времен «Сухого закона», солдаты мировых войн, агенты ФБР и герои боевиков. После снятия с вооружения армии Кольт продолжал применяться сотрудниками полиции, частных охранных структур и отдельными группами военнослужащих. Конструкция продолжает использоваться в большинстве современных пистолетов.</p>
                    <br>
                    <p>Полуавтоматический пистолет TANFOGLIO WITNESS 1911 от известного итальянского производителя оружия гражданского назначения для спорта и самообороны Tanfoglio – одна из наиболее удачных копий этого легендарного пистолета.</p>
                </div>
                <h3 style="text-align: center; padding: 50px 0;">Также вас могут заинтерисовать</h3>
                <div class="row justify-content-center">
                    <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10" style="margin-bottom: 30px;">
                        <a href="" class="gun__link">
                            <div class="gun" style="">
                                <img src="/images/1.jpg" alt="" class="gun__image">
                                <h2 class="gun__title">Grand Power X-Calibur</h2>
                                <p class="gun__description">Израильский пистолет BUL Cherokee</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10" style="margin-bottom: 30px;">
                        <a href="" class="gun__link">
                            <div class="gun" style="">
                                <img src="/images/2.jpg" alt="" class="gun__image">
                                <h2 class="gun__title">Tokyo Marui Foliage Warrior</h2>
                                <p class="gun__description">Страйкбольный пистолет Night Warrior</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10" style="margin-bottom: 30px;">
                        <a href="" class="gun__link">
                            <div class="gun" style="">
                                <img src="/images/3.jpg" alt="" class="gun__image">
                                <h2 class="gun__title">Пистолет Марголина МЦМ</h2>
                                <p class="gun__description">Самозарядный малокалиберный пистолет</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-bottom" style="margin: 30px 0;"></div>
    </div>
    </div>

@endsection

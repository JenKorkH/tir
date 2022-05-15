@extends('layouts.main-layout')

@section('title', 'Спортивно-стрелковый клуб')

@section('content')

    <!--INTROCARUSEL------------------------------->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="/images/mainpage/Тир_Снайперpng.png" alt="">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Арсенал</h1>
                        <p>Стрелково-спортивный клуб с самым большим арсеналом</p>
                        <p><a class="btn btn-lg btn-primary btn-danger" href="#">Оружие</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item w-100">
                <img src="/images/mainpage/carousel-3.jpg" alt="">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Сертификаты</h1>
                        <p>Огромный выбор сертификатов.</p>
                        <p><a class="btn btn-lg btn-primary btn-danger" href="#">Сертификаты</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="/images/mainpage/carousel-2.png" alt="">
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Лучшие инструктора</h1>
                        <p>Все инструктора квалифицированные специалисты в своем деле</p>
                        <p><a class="btn btn-lg btn-primary btn-danger" href="#">Инструктора</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!--ADVANTAGE---------------------------------->
    <div class="container px-4 py-5" id="icon-grid">
        <h2 class="title" style="text-align: center; margin-bottom: 50px;">Преимущества нашего тира</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 g-3 py-5 border-top">
            <div class="col d-flex align-items-start">
                <img class="feature__picture" src="/images/mainpage/icons/pistol.png" alt="">
                <div>
                    <h5 class="fw-bold mb-0">Уверенное и безопасное обращение с любым видом оружия</h5>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <img class="feature__picture" src="/images/mainpage/icons/target.png" alt="">
                <div>
                    <h5 class="fw-bold mb-0">Правильное прицеливание с прицельных приспособлений</h5>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <img class="feature__picture" src="/images/mainpage/icons/ak.png" alt="">
                <div>
                    <h5 class="fw-bold mb-0">Стрельба более чем из 50 видов различного оружия</h5>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <img class="feature__picture" src="/images/mainpage/icons/money.png" alt="">
                <div>
                    <h5 class="fw-bold mb-0">Экономия при покупке сертификатов на стрельбу из известных моделей оружия</h5>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <img class="feature__picture" src="/images/mainpage/icons/personal.png" alt="">
                <div>
                    <h5 class="fw-bold mb-0">Инструкторы спортсмены-профессионалы стрелкового спорта</h5>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <img class="feature__picture" src="/images/mainpage/icons/building.png" alt="">
                <div>
                    <h5 class="fw-bold mb-0">Современный тир длиной более 50 метров с статичными и движущимся мишенями</h5>
                </div>
            </div>
        </div>
        <div class="border-bottom"></div>
    </div>

    <!--GUNS------------------------------------>
    <div class="achievement">
        <h2 class="title">Оружие</h2>
        <div class="achievement_list">
            <a href="/images/mainpage/achievment/achievment-1.jpg" class="achievement_item">
                <div class="achievement_item_hover">Посмотреть</div>
                <img src="/images/mainpage/achievment/achievment-1.jpg" alt="">
            </a>
            <a href="/images/mainpage/achievment/achievment-2.jpg" class="achievement_item">
                <div class="achievement_item_hover">Посмотреть</div>
                <img src="/images/mainpage/achievment/achievment-2.jpg" alt="">
            </a>
            <a href="/images/mainpage/achievment/achievment-3.jpg" class="achievement_item">
                <div class="achievement_item_hover">Посмотреть</div>
                <img src="/images/mainpage/achievment/achievment-3.jpg" alt="">
            </a>
            <a href="/images/mainpage/achievment/achievment-4.jpg" class="achievement_item">
                <div class="achievement_item_hover">Посмотреть</div>
                <img src="/images/mainpage/achievment/achievment-4.jpg" alt="">
            </a>
            <a href="/images/mainpage/achievment/achievment-5.jpg" class="achievement_item">
                <div class="achievement_item_hover">Посмотреть</div>
                <img src="/images/mainpage/achievment/achievment-5.jpg" alt="">
            </a>
            <a href="/images/mainpage/achievment/achievment-6.jpg" class="achievement_item">
                <div class="achievement_item_hover">Посмотреть</div>
                <img src="/images/mainpage/achievment/achievment-6.jpg" alt="">
            </a>
            <a href="/images/mainpage/achievment/achievment-7.jpg" class="achievement_item">
                <div class="achievement_item_hover">Посмотреть</div>
                <img src="/images/mainpage/achievment/achievment-7.jpg" alt="">
            </a>
            <a href="/images/mainpage/achievment/achievment-8.jpg" class="achievement_item">
                <div class="achievement_item_hover">Посмотреть</div>
                <img src="/images/mainpage/achievment/achievment-8.jpg" alt="">
            </a>
        </div>
        <div class="row">
            <button type="button" class="btn btn-danger button__more" style="margin-top:70px;">Каталог оружия</button>
        </div>
    </div>

    <!--CERTIFICATE---------------------------------->
    <div class="container">
        <div class="border-bottom"></div>
        <h2 class="title" style="margin-top: 45px;">Сертификаты на стрельбу</h2>
        <div class="row justify-content-center">
            <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10">
                <div class="certificate">
                    <img src="/images/mainpage/certificate/fs.jpg" alt="" class="certificate__image">
                    <h2 class="certificate__title">first step</h2>
                    <p class="certificate__description">Программа безопасного обращения с пистолетами калибра 9х19 мм</p>
                    <div class="certificate__purchase">
                        <div class="certificate__cost">9 900₴</div>
                        <div class="certificate__count">
                            <div class="certificate__count-text">Стрелков</div>
                            <select class="certificate__count-selection">
                                <option value="">1 человек</option>
                                <option value="">2 человека</option>
                                <option value="">3 человека</option>
                                <option value="">4 человека</option>
                            </select>
                        </div>
                        <div class="certificate__purchase-buttons">
                            <button class="btn btn-secondary certificate__purchase-button" style="margin-right:10px;">Подробнее</button>
                            <button class="btn btn-danger certificate__purchase-button" data-bs-toggle="modal" data-bs-target="#reserve__form">Зарезервировать</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10">
                <div class="certificate">
                    <img src="/images/mainpage/certificate/fs_.jpg" alt="" class="certificate__image">
                    <h2 class="certificate__title">first step</h2>
                    <p class="certificate__description">Программа безопасного обращения с пистолетами калибра 9х19 мм</p>
                    <div class="certificate__purchase">
                        <div class="certificate__cost">9 900₴</div>
                        <div class="certificate__count">
                            <div class="certificate__count-text">Стрелков</div>
                            <select class="certificate__count-selection">
                                <option value="">1 человек</option>
                                <option value="">2 человека</option>
                                <option value="">3 человека</option>
                                <option value="">4 человека</option>
                            </select>
                        </div>
                        <div class="certificate__purchase-buttons">
                            <button class="btn btn-secondary certificate__purchase-button" style="margin-right:10px;">Подробнее</button>
                            <button class="btn btn-danger certificate__purchase-button" data-bs-toggle="modal" data-bs-target="#reserve__form">Зарезервировать</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10">
                <div class="certificate">
                    <img src="/images/mainpage/certificate/nl.png" alt="" class="certificate__image">
                    <h2 class="certificate__title">first step</h2>
                    <p class="certificate__description">Программа безопасного обращения с пистолетами калибра 9х19 мм</p>
                    <div class="certificate__purchase">
                        <div class="certificate__cost">9 900₴</div>
                        <div class="certificate__count">
                            <div class="certificate__count-text">Стрелков</div>
                            <select class="certificate__count-selection">
                                <option value="">1 человек</option>
                                <option value="">2 человека</option>
                                <option value="">3 человека</option>
                                <option value="">4 человека</option>
                            </select>
                        </div>
                        <div class="certificate__purchase-buttons">
                            <button class="btn btn-secondary certificate__purchase-button" style="margin-right:10px;">Подробнее</button>
                            <button class="btn btn-danger certificate__purchase-button" data-bs-toggle="modal" data-bs-target="#reserve__form">Зарезервировать</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <button type="button" class="btn btn-danger button__more"  style="margin-top:90px;">Каталог сертификатов</button>
        </div>
        <div class="border-bottom" style="margin: 50px 0;"></div>
    </div>


    <!--QUOTE--------------------------------------->
    <div class="quote">
        <div class="parallax__header-quote">
            <div class="blur">
                <div class="quote_item">
                    <div class="quote_desc">
                        <div class="quote_text">Человек, имеющий оружие, вооружен не более, чем музыкант, имеющий пианино. Нет никакого смысла владеть оружием, если вы неумело обращаетесь с ним</div>
                        <div class="quote_author">полковник Джеф Купер</div>
                        <div class="quote_author_desc">основоположник современной практической стрельбы</div>
                    </div>
                    <img src="/images/mainpage/cooper.png" alt="-" class="quote_image">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="border-bottom" style="margin: 50px 0;"></div>
    </div>

    <!----PROGRAMS------------------------------------>
    <div class="container">

        <h2 class="title" style="margin-top: 45px;">Учебные программы</h2>
        <div class="row justify-content-center">
            <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10">
                <div class="certificate">
                    <img src="/images/mainpage/certificate/fs.jpg" alt="" class="certificate__image">
                    <h2 class="certificate__title">first step</h2>
                    <p class="certificate__description">Программа безопасного обращения с пистолетами калибра 9х19 мм</p>
                    <div class="certificate__purchase">
                        <div class="certificate__cost">9 900₴</div>
                        <div class="certificate__count">
                            <div class="certificate__count-text">Стрелков</div>
                            <select class="certificate__count-selection">
                                <option value="">1 человек</option>
                                <option value="">2 человека</option>
                                <option value="">3 человека</option>
                                <option value="">4 человека</option>
                            </select>
                        </div>
                        <div class="certificate__purchase-buttons">
                            <button class="btn btn-secondary certificate__purchase-button" style="margin-right:10px;">Подробнее</button>
                            <button class="btn btn-danger certificate__purchase-button" data-bs-toggle="modal" data-bs-target="#reserve__form">Купить</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10">
                <div class="certificate">
                    <img src="/images/mainpage/certificate/fs_.jpg" alt="" class="certificate__image">
                    <h2 class="certificate__title">first step</h2>
                    <p class="certificate__description">Программа безопасного обращения с пистолетами калибра 9х19 мм</p>
                    <div class="certificate__purchase">
                        <div class="certificate__cost">9 900₴</div>
                        <div class="certificate__count">
                            <div class="certificate__count-text">Стрелков</div>
                            <select class="certificate__count-selection">
                                <option value="">1 человек</option>
                                <option value="">2 человека</option>
                                <option value="">3 человека</option>
                                <option value="">4 человека</option>
                            </select>
                        </div>
                        <div class="certificate__purchase-buttons">
                            <button class="btn btn-secondary certificate__purchase-button" style="margin-right:10px;">Подробнее</button>
                            <button class="btn btn-danger certificate__purchase-button" data-bs-toggle="modal" data-bs-target="#reserve__form">Купить</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10">
                <div class="certificate">
                    <img src="/images/mainpage/certificate/nl.png" alt="" class="certificate__image">
                    <h2 class="certificate__title">first step</h2>
                    <p class="certificate__description">Программа безопасного обращения с пистолетами калибра 9х19 мм</p>
                    <div class="certificate__purchase">
                        <div class="certificate__cost">9 900₴</div>
                        <div class="certificate__count">
                            <div class="certificate__count-text">Стрелков</div>
                            <select class="certificate__count-selection">
                                <option value="">1 человек</option>
                                <option value="">2 человека</option>
                                <option value="">3 человека</option>
                                <option value="">4 человека</option>
                            </select>
                        </div>
                        <div class="certificate__purchase-buttons">
                            <button class="btn btn-secondary certificate__purchase-button" style="margin-right:10px;">Подробнее</button>
                            <button class="btn btn-danger certificate__purchase-button" data-bs-toggle="modal" data-bs-target="#reserve__form">Купить</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <button type="button" class="btn btn-danger button__more"  style="margin-top:90px;">Каталог програм</button>
        </div>
        <div class="border-bottom" style="margin: 50px 0;"></div>
    </div>

    <!--INSTRUCTOR------------------------------------>
    <div class="container">
        <h4 class="title">Тренировки проводят квалифицированные спортсмены-инструкторы</h4>
        <div class="teachers">
            <div class="teacher__item">
                <img class="teacher__photo" src="/images/mainpage/personal/3.png" alt="">
                <h4 class="teacher__item-title">Инструктор 3</h4>
                <div class="teacher__text"><p>спортсмен-инструктор, КМСУ, судья ФПСУ</p></div>

            </div>
            <div class="teacher__item">
                <img class="teacher__photo" src="/images/mainpage/personal/4.png" alt="">
                <h4 class="teacher__item-title">Инструктор 4</h4>
                <div class="teacher__text"><p>спортсмен-инструктор, КМСУ, судья ФПСУ</p></div>

            </div>
            <div class="teacher__item">
                <img class="teacher__photo" src="/images/mainpage/personal/4.png" alt="">
                <h4 class="teacher__item-title">Инструктор 4</h4>
                <div class="teacher__text"><p>спортсмен-инструктор, КМСУ, судья ФПСУ</p></div>

            </div>
        </div>
        <div class="border-bottom" style="margin: 50px 0;"></div>
    </div>

    <!--MAP------------------------------------------>
    <h1 class="title">Мы здесь</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3637.4618106142902!2d34.99624237807919!3d48.42886735694695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbe35fc43520d3%3A0x5bf0be99d1a1e4e4!2z0JrQvtC70LvQtdC00LYg0YDQsNC60LXRgtC90L4t0LrQvtGB0LzQuNGH0LXRgdC60L7Qs9C-INC80LDRiNC40L3QvtGB0YLRgNC-0LXQvdC40Y8!5e0!3m2!1sru!2sua!4v1649677022808!5m2!1sru!2sua" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <!--CONTACT-FORM--------------------------------->
    <div class="container">
        <div class="border-bottom" style="margin: 50px 0;"></div>
        <div class="row justify-content-center">
            <div>
                <h1 class="title" style="text-align: center;">Хотите подобрать стрелковую программу, арендовать галерею для тренировки, купить подарочный сертификат или рассчитать стоимость группового мероприятия?</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p style="text-align: center; margin: 20px 0;">Оставьте свои контактные данные, и мы свяжемся с вами в удобное для вас время</p>
            </div>
        </div>
        <form action="">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-5 col-sm-10 col-xs-1">
                    <div class="input-group flex-nowrap reserve__input-number">
                        <span class="input-group-text" id="addon-wrapping">Ваше имя</span>
                        <input type="text" class="form-control" id="" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-10 col-xs-1">
                    <div class="input-group flex-nowrap reserve__input-number">
                        <span class="input-group-text" id="addon-wrapping">+380</span>
                        <input type="text" class="form-control input-number" id="" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-10 col-xs-10">
                    <div class="input-group flex-nowrap reserve__input-number">
                        <span class="input-group-text" id="addon-wrapping">Время</span>
                        <input type="text" class="form-control input-time" id="" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div class="col-lg-1 col-md-5 col-sm-10 col-xs-10">
                    <button type="button" class="btn btn-danger">Отправить</button>
                </div>
            </div>
        </form>
        <div class="row justify-content-center">
            <div class="col">
                <p style="text-align: center;">Нажимая на кнопку "Отправить", вы даете свое согласие на обработку персональных данных.</p>
            </div>
        </div>
        <div class="border-bottom" style="margin: 50px 0;"></div>
    </div>

    <!--MODAL-RESERVE-FORM--------------------------->
    <div class="modal fade" id="reserve__form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Резервирование</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"><hr>
                    <form action="">
                        <div class="reserve__content">
                            <div class="reserve__price">Сумма: 9 900</div>
                            <div class="reserve__instruction">После заполнения формы резервирования, с вами свяжется служба приема гостей, для подтверждения резерва. </div>
                            <div class="reserve__input">
                                <div class="reserve__name">Контактное лицо</div>
                                <div class="input-group flex-nowrap reserve__input-name">
                                    <input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                                <div class="reserve__name">Телефон</div>
                                <div class="input-group flex-nowrap reserve__input-number">
                                    <span class="input-group-text" id="addon-wrapping">+380</span>
                                    <input type="text" class="form-control input-number" id="" placeholder="68-868-6888" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                                <div class="reserve__name">Комментарий</div>
                                <div class="input-group flex-nowrap reserve__input-comment">
                                    <input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                                <input class="form-check-input reserve__checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"><span class="reserve__checkbox-text">Я подтверждаю, что мне исполнилось 18 или более лет.</span><Br>
                                <input class="form-check-input reserve__checkbox" type="checkbox" value="" aria-label="Checkbox for following text input"><span class="reserve__checkbox-text">Настоящим подтверждаю, что с Правилами посещения Стрелкового клуба «Fireline» ознакомлен (-а) и согласен (-на). Обязуюсь выполнять требования, предусмотренные данными Правилами и нести ответственность за их несоблюдение.</span><Br>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger w-100">Зарезервировать</button>
                    <div class="reserve__agreement">Нажимая на кнопку "Зарезервировать", Вы даете свое согласие на обработку персональных данных.</div>
                </div>
            </div>
        </div>
    </div>
@endsection

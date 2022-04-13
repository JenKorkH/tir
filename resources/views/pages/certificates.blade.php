@extends('layouts.main-layout')

@section('title', 'Сертификаты')

@section('content')

    <!--CERTIFICATE---------------------------------->
    <div class="container">
        <div class="border-bottom" ></div>
        <h2 class="title" style="margin-top:120px; margin-bottom: 25px;">Сертификаты на стрельбу</h2>
        <div class="row justify-content-center">
            <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10">
                <div class="sort__select">
                    <select class="certificate__count-selection" style="font-size:24px;">
                        <option value="">По дате</option>
                        <option value="">Сначала дорогие</option>
                        <option value="">Сначала дешевые</option>
                    </select>
                </div>
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-xl col-lg-5 col-md-10 col-sm-10 col-xs-10">
                <div class="certificate">
                    <img src="/images/mainpage/certificate/fs.jpg" alt="" class="certificate__image">
                    <div class="certificate__title">first step</div>
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
    </div>
    <div class="border-bottom" style="margin: 50px 0;"></div>

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

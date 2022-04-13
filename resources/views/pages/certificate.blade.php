@extends('layouts.main-layout')

@section('title', 'Сертификат')

@section('content')

    <div class="container">
        <div class="border-bottom" ></div>
        <h1 class="title" style="margin-top:120px; margin-bottom: 25px;">Сертификат "Название"</h1>
        <div class="row">
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/fs.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/1.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Следующий</span>
                    </button>
                </div>
                <div style="font-weight: 700; font-size: 24px; padding: 10px 0;">Также вас могут заинтерисовать</div>
            </div>
            <div class="col-7" style="margin-left: 20px;">
                <div class="certificate__title">First step</div>
                <div class="certificate__slug">Программа безопасного обращения с пистолетами калибра 9х19 мм</div>
                <div class="certificate__price">9 900₴</div>
                <div style="padding-bottom: 10px;">Стрелков</div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>1 человек</option>
                    <option value="1">2 человека</option>
                    <option value="2">3 человека</option>
                    <option value="3">4 человека</option>
                </select>
                <button class="btn btn-danger certificate__purchase-button" data-bs-toggle="modal" data-bs-target="#reserve__form">Зарезервировать</button>
                <div class="certificate__desc">Программа предназначена для взрослых и подростков (11+), имеющих незначительный опыт обращения с оружием или не имеющих его вообще. По завершении программы вы приобретете навык безопасного обращения с оружием калибра 9х19.</div>
                <div style="text-align: center; font-weight: 700; padding: 20px 0;">Программа проводится индивидуально с инструктором для одного, двоих или компании гостей.</div>
                <div class="certificate__full-desc">
                    <div style="font-weight: 700;">Оружие:</div>
                    <ul class="ceriticate__li">
                        <li class="certificate__gun">пистолет Glock 17</li>
                        <li>пистолет CZ 75 SP-01 SHADOW</li>
                    </ul>
                </div>
                <div class="certificate__full-desc">
                    <div style="font-weight: 700;">В стоимость включено:</div>
                    <ul class="ceriticate__li">
                        <li class="certificate__gun">100 выстрелов на одного человека</li>
                        <li>защитные очки и наушники</li>
                    </ul>
                </div>
                <div class="certificate__full-desc">
                    <div style="font-weight: 700;">Количество гостей:</div>
                    <ul class="ceriticate__li">
                        <li class="certificate__gun">до 4 человек</li>
                    </ul>
                </div>
                <div class="certificate__full-desc">
                    <div style="font-weight: 700;">Продолжительность:</div>
                    <ul class="ceriticate__li">
                        <li class="certificate__gun">1-2 человека - до 50 минут</li>
                        <li>3-4 человека - до 100 минут</li>
                    </ul>
                </div>
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger w-100">Зарезервировать</button>
                    <div class="reserve__agreement">Нажимая на кнопку "Зарезервировать", Вы даете свое согласие на обработку персональных данных.</div>
                </div>
            </div>
        </div>
    </div>

@endsection

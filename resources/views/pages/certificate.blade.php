@extends('layouts.main-layout')

@section('title', 'Выстрел')

@section('content')
    <section class="certificates">
        <div class="container">
            <div class="certificate__inner">
                <div class="certificate__title">
                    <h1 class="title__inner">Сертификаты</h1>
                    <select class="sort__select">
                        <option value="">По дате</option>
                        <option value="">Сначала дорогие</option>
                        <option value="">Сначала дешевые</option>
                    </select>
                </div>
                <div class="certificate__items">
                    <div class="certificate_item">
                        <img class="certificate_image" src="/images/certificate/1.jpg" alt="">
                        <h4 class="certificate_title">Третий сертификат</h4>
                        <div class="certificate_text">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. .</div>
                        <button class="certificate__buy">В корзину</button>
                    </div>
                    <div class="certificate_item">
                        <img class="certificate_image" src="/images/certificate/2.jpg" alt="">
                        <h4 class="certificate_title">Третий сертификат</h4>
                        <div class="certificate_text">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. .</div>
                        <button class="certificate__buy">В корзину</button>
                    </div>
                    <div class="certificate_item">
                        <img class="certificate_image" src="/images/certificate/3.jpg" alt="">
                        <h4 class="certificate_title">Третий сертификат</h4>
                        <div class="certificate_text">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. .</div>
                        <button class="certificate__buy">В корзину</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

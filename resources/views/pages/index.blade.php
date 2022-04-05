@extends('layouts.main-layout')

@section('title', 'Выстрел')

@section('content')

    <!--INTRO-->
    <div class="intro">
        <div class="container">
            <div class="intro_inner">
                <div class="intro_inner_main">Спортивно-стрелковый клуб с огромным арсеналом</div>
                <a href="#" class="intro_button">Каталог сертификатов</a>
            </div>
        </div>
    </div>
    <div class="container">
        <h4 class="feature_title">Преимущества нашего тира</h4>
        <div class="feature_line"></div>
        <div class="features">
            <div class="features_item">
                <img class="features_picture" src="/images/icons/pistol.png" alt="">
                <div class="features_text">Уверенное и безопасное обращение с любым видом оружия</div>
            </div>
            <div class="features_item">
                <img class="features_picture" src="/images/icons/target.png" alt="">
                <div class="features_text">Правильное прицеливание с прицельных приспособлений</div>
            </div>
            <div class="features_item">
                <img class="features_picture" src="/images/icons/ak.png" alt="">
                <div class="features_text">Стрельба более чем из 50 видов различного оружия</div>
            </div>
            <div class="features_item">
                <img class="features_picture" src="/images/icons/money.png" alt="">
                <div class="features_text">Экономия при покупке сертификатов на стрельбу из известных моделей оружия</div>
            </div>
            <div class="features_item">
                <img class="features_picture" src="/images/icons/personal.png" alt="">
                <div class="features_text">Инструкторы спортсмены-профессионалы стрелкового спорта</div>
            </div>
            <div class="features_item">
                <img class="features_picture" src="/images/icons/building.png" alt="">
                <div class="features_text">Современный тир длиной более 50 метров с статичными и движущимся мишенями</div>
            </div>
        </div>
    </div>
    <!--INTRO END-->

    <!--ACHIEVEMENT-->
    <div class="achievement">
        <h2 class="achievement_title">Оружие</h2>
        <div class="achievement_list">
            <a href="/images/achievement/achievement-1.jpg" class="achievement_item">
                <div class="achievement_item_hover">Посмотреть</div>
                <img src="/images/achievement/achievement-1.jpg" alt="" class="achievement_item_img">
            </a>
            <a href="/images/achievement/achievement-2.jpg" class="achievement_item">
                <div class="achievement_item_hover">Посмотреть</div>
                <img src="/images/achievement/achievement-2.jpg" alt="" class="achievement_item_img">
            </a>
            <a href="/images/achievement/achievement-3.jpg" class="achievement_item">
                <div class="achievement_item_hover">Посмотреть</div>
                <img src="/images/achievement/achievement-3.jpg" alt="">
            </a>
            <a href="/images/achievement/achievement-4.jpg" class="achievement_item">
                <div class="achievement_item_hover">Посмотреть</div>
                <img src="/images/achievement/achievement-4.jpg" alt="">
            </a>
            <a href="/images/achievement/achievement-5.jpg" class="achievement_item">
                <div class="achievement_item_hover">Посмотреть</div>
                <img src="/images/achievement/achievement-5.jpg" alt="">
            </a>
            <a href="/images/achievement/achievement-6.jpg" class="achievement_item">
                <div class="achievement_item_hover">Посмотреть</div>
                <img src="/images/achievement/achievement-6.jpg" alt="">
            </a>
            <a href="/images/achievement/achievement-7.jpg" class="achievement_item">
                <div class="achievement_item_hover">Посмотреть</div>
                <img src="/images/achievement/achievement-7.jpg" alt="">
            </a>
            <a href="/images/achievement/achievement-8.jpg" class="achievement_item">
                <div class="achievement_item_hover">Посмотреть</div>
                <img src="/images/achievement/achievement-8.jpg" alt="">
            </a>
        </div>
    </div>



    <div class="container">
        <h4 class="certificate_future_title">Сертификаты на стрельбу</h4>
        <div class="feature_line"></div>
        <div class="certificate">
            <div class="certificate_item">
                <img class="certificate_image" src="/images/certificate/1.jpg" alt="">
                <h4 class="certificate_title"><a href="" style="text-decoration:none; color: #000;">Первый сертификат</a></h4>
                <div class="certificate_text">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. </div>
            </div>
            <div class="certificate_item">
                <img class="certificate_image" src="/images/certificate/2.jpg" alt="">
                <h4 class="certificate_title">Второй сертификат</h4>
                <div class="certificate_text">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. </div>
            </div>
            <div class="certificate_item">
                <img class="certificate_image" src="/images/certificate/3.jpg" alt="">
                <h4 class="certificate_title">Третий сертификат</h4>
                <div class="certificate_text">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. .</div>
            </div>
        </div>
    </div>


    <div class="quote">
        <div class="blur">
            <div class="quote_item">
                <div class="quote_desc">
                    <div class="quote_text">Человек, имеющий оружие, вооружен не более, чем музыкант, имеющий пианино. Нет никакого смысла владеть оружием, если вы неумело обращаетесь с ним</div>
                    <div class="quote_author">полковник Джеф Купер</div>
                    <div class="quote_author_desc">основоположник современной практической стрельбы</div>
                </div>
                <img src="/images/cooper.png" alt="-" class="quote_image">
            </div>
        </div>


    </div>

    <div class="container">
        <h4 class="teacher_title">Инструкторы</h4>
        <div class="feature_line"></div>
        <div class="teachers">
            <div class="teacher_item">
                <img class="teacher_photo" src="/images/personal/1.png" alt="">
                <h4 class="teacher_item_title">Инструктор 1</h4>
                <div class="teacher_text"><p>спортсмен-инструктор, КМСУ, судья ФПСУ</p></div>
            </div>
            <div class="teacher_item">
                <img class="teacher_photo" src="/images/personal/2.png" alt="">
                <h4 class="teacher_item_title">Инструктор 2</h4>
                <div class="teacher_text"><p>спортсмен-инструктор, КМСУ, судья ФПСУ</p></div>
            </div>
            <div class="teacher_item">
                <img class="teacher_photo" src="/images/personal/3.png" alt="">
                <h4 class="teacher_item_title">Инструктор 3</h4>
                <div class="teacher_text"><p>спортсмен-инструктор, КМСУ, судья ФПСУ</p></div>
            </div>
            <div class="teacher_item">
                <img class="teacher_photo" src="/images/personal/4.png" alt="">
                <h4 class="teacher_item_title">Инструктор 4</h4>
                <div class="teacher_text"><p>спортсмен-инструктор, КМСУ, судья ФПСУ</p></div>
            </div>
        </div>
    </div>
@endsection

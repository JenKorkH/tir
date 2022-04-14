<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Nunito+Sans&family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <title>@yield('title')</title>
</head>
<body>

<!--NAVMENU---------------------------------->
<header>
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark justify-content-end" aria-label="Sixth navbar example">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route("home") }}" style="font-size: 26px;">Название</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarsExample06">
                <ul class="navbar-nav  mb-2 mb-xl-0 mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="{{ route("certificates") }}">Сертификаты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Программы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Оружие</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Галерея</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route("about") }}">О клубе</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Контакты</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="dropdown06" data-bs-toggle="dropdown" aria-expanded="false">Профиль</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown06">
                            @auth("web")


                                <li><a class="dropdown-item" href="{{ route("login") }}">Профиль</a></li>
                                <li><a class="dropdown-item" href="{{ route("logout") }}">Выйти</a></li>
                            @endauth
                            @guest("web")

                                    <li><a class="dropdown-item" href="{{ route("login") }}">Войти</a></li>
                            @endguest
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Корзина</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>


@yield('content')

<!--OR-CALL-------------------------------------->
<div class="or-call">
    Звоните! <span><a href="tel:+380688684050" class="number__footer">+38 (068)-868-4050</a></span>
</div>

<!--FOOTER--------------------------------------->
<footer class="footer">
    <div class="footer_all_items">
        <div class="footer_item">
            <div class="footer_title">Телефоны</div>
            <div class="footer_number">
                <p>+38(068)-868-40-50</p>
                <p>+38(063)-352-09-23</p>
                <p>+38(050)-220-52-23</p>
            </div>
        </div>
        <div class="footer_item">
            <div class="footer_title">Мы в социальных сетях</div>
            <div class="footer_social_item">
                <a href="#" class="footer_social_link"><img src="/images/mainpage/social/instagram.png" alt=""></a>
                <a href="#" class="footer_social_link"><img src="/images/mainpage/social/telegram.png" alt=""></a>
                <a href="#" class=""><img src="/images/mainpage/social/facebook.png" alt=""></a>
            </div>
        </div>
        <div class="footer_item">
            <div class="footer_title">Про сайт</div>
            <div class="footer_about_text">Сайт предназначен для организации работы стрелкового-клуба или тира</div>
        </div>
    </div>
    <div class="footer_madeby">Made by Yevhenii Korchev</div>
</footer>

<!--SCRIPTS--------------------------------------->
<script src="/js/burger.js"></script>
<script src="/js/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
<script src="/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<a href="#" class="scrollup" style="color: black;">Наверх</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

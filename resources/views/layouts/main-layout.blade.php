<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Nunito+Sans&family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
<header>
    <nav class="navbar">
        <a href="#" class="nav__branding">@yield('title')</a>
        <ul class="nav__menu">
            <li class="nav__item"><a href="#" class="nav__link">Каталог</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Сертификаты</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Галерея</a></li>
            <li class="nav__item"><a href="#" class="nav__link">О клубе</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Контакты</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Личный кабинет</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Корзина</a></li>
        </ul>
        <div class="burger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
</header>

@yield('content')

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
                <a href="#" class="footer_social_link"><img src="/images/social/instagram.png" alt=""></a>
                <a href="#" class="footer_social_link"><img src="/images/social/telegram.png" alt=""></a>
                <a href="#" class=""><img src="/images/social/facebook.png" alt=""></a>
            </div>
        </div>
        <div class="footer_item">
            <div class="footer_title">Про сайт</div>
            <div class="footer_about_text">Сайт предназначен для организации работы стрелкового-клуба или тира</div>
        </div>
    </div>
    <div class="footer_madeby">Made by Yevhenii Korchev</div>
    </div>
</footer>

<script src="/js/burger.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>

<script src="/js/slick.min.js"></script>

<script src="/js/main.js"></script>

<script>
    $(".achievment_list").magnificPopup({
        delegate: "a",
        type: "image",
        gallery: {
            enabled: true
        }
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });

        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
    });
</script>
    <a href="#" class="scrollup">Наверх</a>
</body>
</html>

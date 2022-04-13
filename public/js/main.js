$(document).ready(function(){
    $('.input-number').mask("(99) 999-9999");
})

$(document).ready(function(){
    $('.input-time').mask("99-99");
})

window.onscroll = function showHeader(){
    var header = document.querySelector('header');

    if(window.pageYOffset >100){
        header.classList.add('header_fixed');
    }
    else{
        header.classList.remove('header_fixed');
    }
}

$(".achievement_list").magnificPopup({
    delegate: "a",
    type: "image",
    gallery: {
        enabled: true
    }
});

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

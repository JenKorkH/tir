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

function addGun(){

    var gun = document.querySelector("#gunsID")

    var mixedGunSelect = document.querySelector("#datalistOptions"),
        gunSelect = mixedGunSelect.children,
        gunSelectLen = gunSelect.length;

    let guns = [];

    for (var i = 0; i < gunSelectLen; i++) {
        var val = gunSelect[i].value;
        guns.push(val);
    }

    var textArea = document.querySelector("#gunAreaID");

    let gunsInTextArea = [];
    for(var i = 0; i<gunSelectLen; i++)
    {
        var exist = textArea.value.split("\n");
        var temp = 0;
        console.log(exist)
        if(gun.value==guns[i])
        {
            for(var j = 0; j<exist.length; j++)
            {
                if(gun.value == exist[j])
                {
                    temp = 1;
                }
            }
            if(temp == 0)
            {
                if(textArea.value!= '')
                {
                    textArea.value = textArea.value + '\n' + gun.value;
                }
                else
                {
                    textArea.value = gun.value
                }
                break;
            }
        }
    }
}

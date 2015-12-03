$(document).ready(function(){

    /*SLIDER MOTHERFUCKIER!!1*/
    /*Ширина одного слайда*/
    var w=$('#slider').width()/5;
    /*Ширина всего спрайта*/
    var slider_size = $('#slider').width();
    /*alert(slider_size);*/
    /*определеяем кол-во слайдов в спрайте*/
    var count_image = slider_size/w;
    /*привязываем кол-во кликов к кол-ву слайдов*/
    var clix_num = count_image-1;
    /*переменная для цикла for*/
    var i;
    /*присваеваем класс списка переменной*/
    var myList = $('.myList');
    /*определяем переменную для создания <li>*/
    var myListItems = '';
    /*определяем переменную позиции слайда*/
    var current_pos;
    /*обнуляем счётчик clix*/
    var clix = 0;
    /*цикл for создания <li> с присвоением класса id и data-item*/
    for ( i =0; i < count_image; i++ ) {
        myListItems += '<li ><a href="javascript://" class ="nav_slide" id="slide_'+ i+ '" data-item="'+ i +'">'+ i + '</a></li>';
    }
    /*записываем созданные элементы в html*/
    myList.html(myListItems);
    var int;
    var timer = setInterval('$(".next").click()', 5000);

    /*функция кликов по кружочкам*/
    $('.nav_slide').click(function(){

        /*записываем в переменную id значение атрибута data-item*/
            var id = $(this).attr('data-item');
        /*определяем позицию каждого слайда*/
            current_pos = id*w;
        /*присваиваем clix определённую позицию в зависимости от нажатого кружочка*/
            clix = +id;
        /*сдвигаем спрайт в позицию выбранного слайда*/
            $('#slider').animate({ right: current_pos }, 1000);
        /*убираем ненужное выделение кружочка*/
            $(".nav_slide").removeClass("active");
        /*добавляем выделение нужному кружочку*/
            $(this).addClass("active");
        clearInterval(timer);
        timer = setInterval('$(".next").click()', 10000);
        }
    );
    /*при загрузке страницы активен первый кружочек*/
    $("#slide_0").addClass("active");
    /*функция сдвига спрайта на 1 слайд вправо*/

        $(".next").click(function(){

                $(".nav_slide").removeClass("active");
                /*добавляем активность кружочку с id активного слайда*/
                $("#slide_" + (clix + 1)).addClass("active");
                /*сдвигаем слайд до тех пор пока он не окажется последним*/
                if (clix < clix_num) {
                    $("#slider").animate({right: "+=" + w}, 1000);
                    clix = clix + 1;
                    clearInterval(timer);
                    timer = setInterval('$(".next").click()', 10000);
                }
                /*если он последний присваиваем значение clix=0 и добавляем активность кружочка с id=0 и отматываем слайд на первую позицию*/
                else {
                    clix = 0;
                    $(".nav_slide").removeClass("active");
                    $("#slide_0").addClass("active");
                    $("#slider").animate({right: "0px"}, 1000);
                }
        });

        /*аналогично, но влево*/
    $(".prev").click(function(){
        $(".nav_slide").removeClass("active");
        $("#slide_"+(clix-1)).addClass("active");
        if (clix > 0){
        $("#slider").animate({right:"-=" +w}, 1000);
            clix = clix-1;
            clearInterval(timer);
            timer = setInterval('$(".next").click()', 7000);
        }
        else{
            clix = clix_num;
            $(".nav_slide").removeClass("active");
            $("#slide_"+clix_num).addClass("active");
            $("#slider").animate({right: slider_size-w}, 1000);
        }
    });
});
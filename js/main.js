$(document).ready(function() {

    var toggle = document.querySelector('.menu__toggle');
    var close = document.querySelector('.toggle');
    var menu = document.querySelector('.modal-menu');

    var min = document.querySelector('[name=min]');
    var max = document.querySelector('[name=max]');
    var count = document.querySelector('[name=count]');

    if ($(window).width() < '749') {
        $('.advantages__item:nth-child(n+4)').hide();
        $('.about__text--dop').hide();

    }
    else {
        $('.advantages__item:nth-child(n+4)').show();
        $('.about__text--dop').show();
        $('.sub__list').show();
    }
    if ($(window).width() < '1169') {
        $('.sub__list').hide();
    }
    else {
        $('.sub__list').show();
    }

    $('.advantages__btn').click(function(e){
        e.preventDefault();
        $('.advantages__item:nth-child(n+4)').slideToggle('1000');
        if ($(this).html() == 'Показать все') {
            $(this).html('Скрыть');
        }
        else {
            $(this).html('Показать все');
        }
    });

    $('.about__btn').click(function(e){
        e.preventDefault();
        $('.about__text--dop').slideToggle('1000');
        if ($(this).html() == 'Показать ещё') {
            $(this).html('Скрыть');
            $(this).css('margin-top', '20px');
        }
        else {
            $(this).html('Показать ещё');
            $(this).css('margin-top', '0px');
        }
    });

    toggle.addEventListener('click', function() {
        menu.classList.remove('hide');
        menu.classList.add('show');
    });

    close.addEventListener("click", function (evt) {
        evt.preventDefault();
        menu.classList.add('hide');
        menu.classList.remove('show');
    });

    $('.footer__item').each(function() {
        var item = $(this);
        item.click(function(e) {
            e.preventDefault();
            var sub = item.find('.sub__list');
            sub.slideToggle(1000);
        })
    });

    $('.catalog__count').each(function() {
        var asd = $(this);
        asd.find('.count-min').click(function() {
            var data = asd.find('input').val();
            if(data > 0) {
                asd.find('input').val(parseInt(data) - 1);
            }

            return false
        });
        asd.find('.count-max').click(function() {
            var data = asd.find('input').val();
            asd.find('input').val(parseInt(data) + 1);
            return false
        });
    });

    $('.action__wrapper').owlCarousel({
        loop:true, // закольцевать
        touchDrag: true,
        items: 1, // один слайд
        nav:false, // кнопки вперед/назад
        autoplay:true, // автопрокрутка
        autoplayTimeout:3000, // задержка в мс
        lazyLoad:true,
        autoplayHoverPause:false, // не останавливать при наведении
        responsive:{
            0:{
                items:1
            }
        }
    })
    $('.catalog__list').owlCarousel({
        center:true,
        touchDrag: true,
        loop:true, // закольцевать
        nav:false, // кнопки вперед/назад
        autoplay:true, // автопрокрутка
        autoplayTimeout:3000, // задержка в мс
        autoplayHoverPause:true, // не останавливать при наведении
        stagePadding: 15,
        dots: false,
        lazyLoad:true,
        autoWidth: true,
        margin: 30,
        scrollPerPage : true,
        responsiveClass:true,
        responsive:{
            0:{
                items: 1
            },
            750: {
                items: 3,
                stagePadding: 0,
                dots: true
            },
            1170: {
                items: 4,
                stagePadding: 0,
                dots: true
            }
        }
    })

})
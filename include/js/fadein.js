
var el_script = document.createElement('script');
// script.setAttribute('src', 'jquery-3.4.1.min.js');

script.addEventListener('load', function() {
    $(function(){
        $(window).scroll(function (){
            $('.fadein').each(function(){
                var targetElement = $(this).offset().top;
                var scroll = $(window).scrollTop();
                var windowHeight = $(window).height();
                if (scroll > targetElement - windowHeight + 200){
                    $(this).css('opacity','1');
                    $(this).css('transform','translateY(0)');
                }
            });
        });
    });
});
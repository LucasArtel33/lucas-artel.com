// smooth scroll
jQuery(document).ready(function($){
    $('a.smoothScroll').click(function(e){
        e.preventDefault();
        $id = $(this).attr('href');
        $('body,html').animate({
            scrollTop: $($id).offset().top -20
        }, 750);
    });
});

//slider des competence
//frontEnd part
$(function(){
    $('#frontTitle').on('click touch', function(e){
        $('#frontContent').slideToggle();
        $('#downArrowFront').slideToggle();
        if ($("#cmsContent").is(":visible")){
            $('#cmsContent').slideToggle();
            $('#downArrowCms').slideToggle();
        }
        if ($("#backContent").is(":visible")){
            $('#backContent').slideToggle();
            $('#downArrowBack').slideToggle();
        }
    });
});
//BackEnd part
$(function(){
    $('#backTitle').on('click touch', function(e){
        if ($("#frontContent").is(":visible")){
            $('#frontContent').slideToggle();
            $('#downArrowFront').slideToggle();
        }
        if ($("#cmsContent").is(":visible")){
            $('#cmsContent').slideToggle();
            $('#downArrowCms').slideToggle();
        }
        $('#backContent').slideToggle();
        $('#downArrowBack').slideToggle();
    });
});
//CMS part
$(function(){
    $('#cmsTitle').on('click touch', function(e){
        $('#cmsContent').slideToggle();
        $('#downArrowCms').slideToggle();
        if ($("#backContent").is(":visible")){
            $('#backContent').slideToggle();
            $('#downArrowBack').slideToggle();
        }
        if ($("#frontContent").is(":visible")){
            $('#frontContent').slideToggle();
            $('#downArrowFront').slideToggle();
        }
    });
});

//Realisation

$(function(){
    $('.div_move').on('click touch', function(e) {
        if($(this).hasClass('w50')){
            $(this).addClass('w100').removeClass('w50');
            $(this).find('p').addClass('show').removeClass('hide');
            $(this).find('a').addClass('show').removeClass('hide');
            $(this).parent().find('.w50').addClass('hide').removeClass('show');
        }
        else {
            $(this).addClass('w50').removeClass('w100');
            $(this).find('p').addClass('hide').removeClass('show');
            $(this).find('a').addClass('hide').removeClass('show')
            $(this).parent().find('.w50').addClass('show').delay(500).queue(function() {
                $(this).removeClass('hide').dequeue();
            });
        }
    });
});


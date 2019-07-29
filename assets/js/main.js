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


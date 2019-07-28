jQuery(document).ready(function($){
    $('a.smoothScroll').click(function(e){
        e.preventDefault();
        $id = $(this).attr('href');
        $('body,html').animate({
            scrollTop: $($id).offset().top -20
        }, 750);
    });
});
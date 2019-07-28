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
$(window).scroll(function(){
    if ($(this).scrollTop() > 10) {
        $('#mynavbar').addClass('navbarAdd');
    } else {
        $('#mynavbar').removeClass('navbarAdd');
    }
});
// go to top
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) { 
        $('#return-to-top').fadeIn(200);
    } else {
        $('#return-to-top').fadeOut(200);
    }
});
$('#return-to-top').click(function() { 
    $('body,html').animate({
        scrollTop : 0
    }, 10);
});



// menu
$(".menu-toggle").click(function() {
    $(".menu").slideToggle(500);
});


// toogle

$(".contact-toggle").click(function(){  
        $(".bottomFooter").slideToggle();  
    });

// slide navbar
$('.mobile-toggler').click(function() {
  $(this).toggleClass("active");
  $('.navbarToggle').toggle("fast");
});
// page on scroll
jQuery(document).ready(function() {
  jQuery(window).scroll(function() {   
    var sticky = jQuery('.tab-coustom .nav-tabs'),
      scroll = jQuery(window).scrollTop();
    if (scroll > 15  ) sticky.addClass('tabfixed');
    else sticky.removeClass('tabfixed');
  });
});

jQuery(document).ready(function() {
  jQuery(window).scroll(function() {   
    var sticky = jQuery('header'),
      scroll = jQuery(window).scrollTop();
    if (scroll > 15  ) sticky.addClass('headerfixed');
    else sticky.removeClass('headerfixed');
  });
});

// footer

jQuery(".footer-link").click(function (){
  jQuery(this).toggleClass('closebtn');
  jQuery('.footer-m ul').toggleClass('heightlist', 5000);
  });


jQuery("#nav li .fa-angle-right").click(function () { 
  jQuery(this).parent().parent().toggleClass('open', 300);
});
jQuery("#nav li .fa-angle-right").click(function () { 
  jQuery(this).toggleClass('fa-angle-right fa-angle-down', 300);
});

jQuery(".overlay-menu").click(function () { 
   jQuery('#nav li').removeClass('open', 300);
   jQuery('#nav li .fa-angle-up').toggleClass('fa-angle-up fa-angle-down', 300);
});

jQuery(".overlay-menu").click(function () { 
  jQuery('#mobile').removeClass('navigation', 300);
});


  // navigation
var burgerBtn = document.getElementById('burgerBtn');
var mobile = document.getElementById('mobile');
var demo2 = document.getElementById('nav-mobile');
burgerBtn.addEventListener('click', function() {
  mobile.classList.toggle('navigation');
}, false);


	
// tab
var tabs =jQuery('.nav-tabs');
var selector = jQuery('.nav-tabs').find('li').length;
var activeItem = tabs.find('.active');
var activeWidth = activeItem.innerWidth();
jQuery(".selector").css({
  "left": activeItem.position.left + "px", 
  "width": activeWidth + "px"

});

jQuery(".nav-tabs").on("click","li",function(e){
  var activeWidth = jQuery(this).innerWidth();
  var itemPos = jQuery(this).position();
  jQuery(".selector").css({
    "left":itemPos.left + "px", 
    "width": activeWidth + "px"
  });
}); 
 jQuery('#appli_upload').change(function() {    
  var file = jQuery('#appli_upload')[0].files[0].name;  
  jQuery(this).parent().find('span').text(file);
 
});
// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = document.getElementsByClassName("at");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
} 


jQuery('#freeconsultation a').not('.openbox').on('click', function(){ 
jQuery(this).parent().toggleClass('openform', 500);     
});


// To reposition live zendesk chat widget
function move_zopim_widget(height=75){
  $zopim.livechat.button.setOffsetVerticalMobile(height);
}
jQuery(".footer-link").click(function (){
  jQuery(this).toggleClass('zopim_moved');
  if( jQuery(this).hasClass('zopim_moved') ){
    move_zopim_widget();
  }else{
    move_zopim_widget(25);
  }
});

jQuery(window).load(function() {
  move_zopim_widget(25);
  jQuery('.zopim').hide(); 
  setTimeout(function(){  jQuery('.zopim').find('iframe').contents().find('.jx_ui_Label').text('Live Chat');jQuery('.zopim').show(); }, 1000);
});
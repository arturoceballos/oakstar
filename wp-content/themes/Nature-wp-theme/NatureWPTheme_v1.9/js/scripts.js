$(function() {
    //grid portfolio 
        Grid.init();
        
$(window).load(function() {
    $('#homeCarousel').carousel()
    $('#testimonialCarousel').carousel()
    $('.portfolio-slider-span .flexslider').flexslider({
        animation: "fade"
    });
    $('.post-featured-box .flexslider').flexslider({
        animation: "slide"
    }); 
});

/* ---------- @ Scroll to Top -----------*/
$('div.scroll-top a').click(function(){
$('html,body').animate({scrollTop:0},500);
return false;
});


$(document).ready(function() {
    $('.nav').onePageNav({
    filter: ':not(.external)',
    currentClass: 'active',
    scrollThreshold: 0.25
    });
    $(".main-nav").sticky({ topSpacing: 0 });
});

$(window).load(function() {
$('ul.nav').mobileMenu({
defaultText: 'Navigation',
className: 'select-menu',
subMenuDash: '&ndash;'
});
});
/* ---------- @ Contact From -----------*/
 $(document).ready(function ()
{ 
  $('#submit').formValidator({
    scope: '#form'
  });
  
  $('#post-commentsss').formValidator({
    scope: '#comments-form'
  });
  
  $('#submit,#post-commentsss').click(function() {
        $('input.error-input, textarea.error-input').delay(300).animate({marginLeft:0},100).animate({marginLeft:10},100).animate({marginLeft:0},100).animate({marginLeft:10},100);
    });

  // Form plugin

  var options = {

    beforeSubmit: function() {
      $('.sending').show();

    },
    success: function() {
      $('.sending').hide();
      $('#form').hide();
      $(".mess").show().html('<h5>Thanks !</h5><h5>Your message has been sent.</h5>'); // Change Your message post send
      $('.mess').delay(3000).fadeOut(function() {

        $('#form').clearForm();
        $('#form').delay(3500).show();

      });
    }
  };
  

  $('#form').submit(function() {
    $(this).ajaxSubmit(options);
    return false;
  });
});

/* ---------- @ Newsletter From -----------*/
 $(document).ready(function ()
{ 
  $('#n-submit').formValidator({
    scope: '#newsletter-form'
  });
   
  $('#n-submit').click(function() {
        $('input.error-input, textarea.error-input').delay(300).animate({marginLeft:0},100).animate({marginLeft:10},100).animate({marginLeft:0},100).animate({marginLeft:10},100);
    });

  // Form plugin

  var options = {

    beforeSubmit: function() {
      $('.sending').show();

    }, 
    success: function() {
      $('.sending').hide();
      $('#newsletter-form').hide();
      $(".mess").show().html('<h5>Got it,</h5><h5>you have been added to our email list.</h5>'); // Change Your message post send
      $('.mess').delay(3000).fadeOut(function() {

        $('#newsletter-form').clearForm();
        $('#newsletter-form').delay(3500).show();

      });
    }
  };
  
$('#newsletter-form').submit(function() {
    $(this).ajaxSubmit(options);
    return false;
  });

});

 //you can specify an options when calling flip() function
var options = {
       alwaysOneDirection: 'false', //values: 'true' or 'false', indicates if flipping card always in one direction
       direction: 'lr', //values: 'lr' (left to right), 'tb'(top to bottom), 'rl' and 'bt'
       speed: '500ms', //specify animation duration
       timingfunction: 'ease', //built-in timing function list (see it below) or customized cubic-beizer
       onflipping: function(dir, transDir) //this event will be triggered before animation
       {
           //dir is direction e.g. 'lr', 'tb'
           //transDir means transforming from front to back (value: 'fb') or back to front (value: 'bf')
           console.log("onflipping event"); 
       },
       onflipped: function(dir, transDir) //this event will be triggered after animation
       {
           //dir is direction e.g. 'lr', 'tb'
           //transDir means transforming from front to back (value: 'fb') or back to front (value: 'bf')
           console.log("onflipped event"); 
       }
}
$(".card-container").flip(options);


});
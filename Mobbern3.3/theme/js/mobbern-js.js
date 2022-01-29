/**
 * Mobbern Theme JS
 * Changelog: 
 ** 1.2 Fix AutoScroll Effect for header-preset-minimal & header-preset-ads
 ** 1.1 Initial Build
 */

// Fixed Navbar on Top
var navbar_position;
var navbar_element;

function updateVariationsScrollFX() {
  switch(true) {
    case ( $('#mobbern-header-0').is(":visible") ):
        navbar_position = $("#page-header").height()-$("#mobbern-header-0 #main-navbar").height();
        navbar_element = "#mobbern-header-0 #main-navbar";
        $('#wrap').removeClass( function() { return $(this).attr( "class" ).replace("customizer-open", ""); } ).addClass( "header-0" );
        break;
    case ( $('#mobbern-header-1').is(":visible") ):
        navbar_position = $("#page-header").height()-$("#mobbern-header-1 #main-navbar").height();
        navbar_element = "#mobbern-header-1 #main-navbar";
        $('#wrap').removeClass( function() { return $(this).attr( "class" ).replace("customizer-open", ""); } ).addClass( "header-1" );
        break;
    case ( $('#mobbern-header-2').is(":visible") ):
        navbar_position = $("#page-header").height()-$("#mobbern-header-2 #main-navbar").height();
        navbar_element = "#mobbern-header-2 #main-navbar";
        $('#wrap').removeClass( function() { return $(this).attr( "class" ).replace("customizer-open", ""); } ).addClass( "header-2" );
        break;
    case ( $('#mobbern-header-3').is(":visible") ):
        navbar_position = $("#page-header").height()-$("#mobbern-header-3 #main-navbar").height();
        navbar_element = "#mobbern-header-3 #main-navbar";
        $('#wrap').removeClass( function() { return $(this).attr( "class" ).replace("customizer-open", ""); } ).addClass( "header-3" );
        break;
    case ( $('#mobbern-header-4').is(":visible") ):
        navbar_position = $("#mobbern-header-4 #main-navbar").height()/2;
        navbar_element = "#mobbern-header-4 #main-navbar";
        $('#wrap').removeClass( function() { return $(this).attr( "class" ).replace("customizer-open", ""); } ).addClass( "header-4" );
        break;
  }
}

$(document).on("scroll", function() {

  
  
  if ( navbar_element == "#mobbern-header-4 #main-navbar") {
    $(navbar_element).parent().toggleClass( "navbar-transparent" , $(document).scrollTop() < navbar_position*3);
    $(navbar_element).toggleClass( "navbar-fixed" , $(document).scrollTop() > navbar_position*3-1);
  } else {
    $(navbar_element).toggleClass( "navbar-fixed" , $(document).scrollTop() > navbar_position);
  }

  $(".header-0 #page-body").toggleClass("body-scrolled", $(document).scrollTop() >= navbar_position);
  $(".header-1 #page-body").toggleClass("body-scrolled", $(document).scrollTop() >= navbar_position);
  $(".header-2 #page-body").toggleClass("body-scrolled", $(document).scrollTop() >= navbar_position);
  $(".header-3 #page-body").toggleClass("body-scrolled", $(document).scrollTop() >= navbar_position);
  $(".header-4 #page-body").toggleClass("body-scrolled", $(document).scrollTop() >= $("#page-header").height()-60 );
});


// Scripting:
$(document).ready(function(){

  //Init Scroll Effects
  updateVariationsScrollFX();

  //Tooltips
  $("div.footer-contact-social a, .scroll-link, .profile-icons a").tooltip();
  $(".collapse-button").tooltip({placement : "left"});
  $(".icon-ucp a").tooltip({placement : "bottom"});

  // BEGIN: drop-down effect
  $('#main-navbar .dropdown').on('show.bs.dropdown', function(e){
      var $dropdown = $(this).find('.dropdown-menu');
      var orig_margin_top = parseInt($dropdown.css('margin-top'));
      var orig_height = parseInt($dropdown.css('height'));
      $dropdown.css({'height': '0', opacity: 0}).animate({'height': orig_height + 'px', opacity: 1}, 300, function(){
         $(this).css({'height':''});
      });
   });

  // Add slidedown & fadeout animation to dropdown
  $('#main-navbar .dropdown').on('hide.bs.dropdown', function(e){
      var $dropdown = $(this).find('.dropdown-menu');
      var orig_margin_top = parseInt($dropdown.css('margin-top'));
      $dropdown.css({'margin-top': orig_margin_top + 'px', opacity: 1, display: 'block'}).animate({'margin-top': (orig_margin_top + 10) + 'px', opacity: 0}, 300, function(){
         $(this).css({'margin-top':'', display:''});
      });
  });
  // END: drop-down effect



  // Display search button
  $( "input#keywords" ).on({

    focus: function() {
      $( "input.search-icon" ).addClass( "active" );
      $( "#main-navbar>.container>.nav-content>.float-right" ).addClass( "active" );
    },
    
    blur: function() {
      $( "input.search-icon" ).removeClass( "active" );
      $( "#main-navbar>.container>.nav-content>.float-right" ).removeClass( "active" );
      $( "#navbar-searchbox-container" ).css({width:"auto"});
    }
  });

  $( "#navbar-searchbox-container" ).on({

    click: function() {
      $( this ).parent().parent().parent().addClass( "active" );
      $("#keywords").focus();
      $( this ).animate({width:"100%"});
    }

  });



  // Smooth Scroll for In-Page Links
   $('a.scroll-link').bind('click', function(e) {
    e.preventDefault();
       
    var target = $(this).attr("href");
            
    $('html, body').stop().animate({ scrollTop: $(target).offset().top }, 1000, function() {
         location.hash = target;
    });
            
    return false;
   });


  // BEGIN: Collapsable Panes 
    // Collapse Button
    $(".collapse-button").each(function () {

      var target_id = $( this ).data('target').substr(1) + "_shown";
      
      if ( $.cookie( target_id ) === "false" ) {
        $(this).toggleClass ("collapsed");
      }

    });

    // Collapse Target
    var c = document.cookie;
    $(".collapse").each(function () {
      if (this.id) {
        var pos = c.indexOf(this.id + "_shown=");
        if (pos > -1) {
          c.substr(pos).split('=')[1].indexOf('false') ? $(this).addClass('in') : $(this).removeClass('in');
        }
      }
    }).on('hidden.bs.collapse shown.bs.collapse', function () {
      if (this.id) {
        $.cookie( this.id + "_shown", $(this).hasClass('in'));
      }
    });
  // END: Collapsable Panes 

  // Cool Checkboxes and Radio Buttons
  // Init iCheck
  $('input').iCheck({
    checkboxClass: 'icheckbox_square-grey',
    radioClass: 'iradio_square-grey',
    increaseArea: '20%' // optional
  });

  // Extend MarkList Function to work with iCheck
  var old_marklist = marklist;

  marklist = function(id, name, state) {
    old_marklist.call(this, id, name, state);
    
    var css_selector = "#" + id + ' input[name="' + name + '[]"]';

    $(css_selector).each(function () {
    if ( this.checked )
      $(this).parent().addClass ("checked");
      else
      $(this).parent().removeClass ("checked");
    });
    
  };

  // Lazy Icons
  $(".fa").addClass("lazyIcon");
  $(".footer-links-list li .fa").removeClass("lazyIcon");
});
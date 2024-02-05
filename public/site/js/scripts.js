(function($){$(document).ready(function(){
	
$(window).scroll(function(){
    if ($(this).scrollTop() > 10) {
       $("#header").addClass("head_shadow");
    } else {
       $("#header").removeClass("head_shadow");
    }
});

$('body').click(function(event) {
  if (!$('.alert_conntent_top').is(event.target) && $('.alert_conntent_top').has(event.target).length === 0) {
    $('.alert_conntent_top').slideUp();
    $('.notific_item').removeClass('active');
  }
});
$('.notific_item').click(function(event) {
  event.stopPropagation()
  $(this).toggleClass('active');
  $(".alert_conntent_top").slideToggle();
});
$('body').click(function(event) {
  if (!$('.alert_conntent_top').is(event.target) && $('.alert_conntent_top').has(event.target).length === 0) {
    $('.alert_conntent_top').slideUp();
    $('.alert_num').removeClass('active');
  }
});
$('.alert_num').click(function(event) {
  event.stopPropagation()
  $(this).toggleClass('active');
  $(".alert_conntent_top").slideToggle();
});


$('body').click(function(event) {
  if (!$('.account_info_box').is(event.target) && $('.account_info_box').has(event.target).length === 0) {
    $('.account_info_box').slideUp();
    $('.account_show').removeClass('active');
  }
});
$('.account_show').click(function(event) {
  event.stopPropagation()
  $(this).toggleClass('active');
  $(".account_info_box").slideToggle();
});


$(document).scroll(function(){
var y = $(this).scrollTop();
if (y > 600){ $('.top_page').fadeIn(); } else{ $('.top_page').fadeOut(); }});
$('.top_page').click( function(){ $('body,html').animate({ scrollTop: 0 },600); return false; });



  /*  FAQ */
  var parent = $( '.h3-to-tab' );
  var allh3 = parent.find( 'h3' );
  if( allh3.length ) {
    parent
      .attr( 'itemscope', '' )
      .attr( 'itemtype', 'https://schema.org/FAQPage' );
  }
  allh3.addClass( 'accordion-header closed' );
  allh3.each( function( i, h3 ) {
    var questionBody = $( '<div>' )
      .attr( 'itemscope', '' )
      .attr( 'itemprop', 'mainEntity' )
      .attr( 'itemtype', 'https://schema.org/Question' )
      [ 0 ]; // get real DOM object no jQuery one
    var accordionBody = $( '<div>' )
      .hide()
      .attr( 'itemscope', '' )
      .attr( 'itemprop', 'acceptedAnswer' )
      .attr( 'itemtype', 'https://schema.org/Answer' )
      .addClass( 'accordion-body closed' );
    accordionBody.appendTo( questionBody )
    h3.setAttribute( 'itemprop', 'name' );
    var bodyInner = $( '<div>' )
        .attr( 'itemprop', 'text' )
        .appendTo( accordionBody );
    $( h3 ).nextUntil( 'h3' ).appendTo( bodyInner );

    h3.parentNode.insertBefore( questionBody, h3.nextSibling );
    questionBody.insertBefore( h3, accordionBody[ 0 ] );
  } );
  parent.on( 'click', 'h3', function( evt ) {
    $( this ).toggleClass( 'closed' );
    $( this ).next( '.accordion-body' ).slideToggle();
  } );


});}(jQuery));
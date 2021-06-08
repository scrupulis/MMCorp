

$('a#hamberger-toggle-switch').click( function(){
    console.log('Toggle Class');
    $(this).toggleClass("active");
    $('#sp-nav-body').slideToggle(300);
} );
$('#sp-nav nav ul li.nav-item').click( function(){
    console.log('Toggle Class');
    $('a#hamberger-toggle-switch').toggleClass("active");
    $('#sp-nav-body').slideToggle(300);
} );


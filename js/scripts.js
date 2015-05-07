// get the value of the bottom of the #intro element by adding the offset of that element plus its height, set it as a variable
var introbottom = $('#home-intro').offset().top;


if( $(window).scrollTop() > introbottom ){
	$('header').addClass('past-intro');
}
// on scroll, 
$(window).on('scroll',function(){

    // we round here to reduce a little workload
    stop = Math.round($(window).scrollTop());
    if (stop > introbottom) {
        $('header').addClass('past-intro');
    } else {
        $('header').removeClass('past-intro');
    }

});
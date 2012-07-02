////////////////
// ADD SCREEN //
////////////////

//#btn-discuss
$('#btn-discuss').click(function() {
	$('#add').toggle();
	$('#discuss').toggle();
});


////////////////
// ADD SCREEN //
////////////////

//tabs
$('#myTab a').click(function (e) {
	e.preventDefault();
	$(this).tab('show');
});


////////////////
// SLIDE      //
////////////////

//onstage
$(document).ready(function() {
  $('#modal').addClass('onstage');
});

//slideout
$('button.out').click(function (e) {
	$('#modal').addClass('slideout');
});
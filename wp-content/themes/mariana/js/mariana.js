$(function(){

	$('#portifolio_tab a').click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	});

	$('#submit').addClass('btn');
    $('#submit').addClass('btn-mariana');

});
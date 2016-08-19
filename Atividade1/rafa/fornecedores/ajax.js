$(document).ready(function(e){
		$("a").click(function(e){
		e.preventDefault();
		var href=$(this).attr('href');
		$(".variavel").load(href+ " .variavel");
	});
});
	
	

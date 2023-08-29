// JavaScript Document
$(document).ready(function() {	
		$(':button').addClass('botao');
	$('.window .close').click(function (e) {
		e.preventDefault();
		$('#mask').hide();
		$('.window').hide();
	});		
	
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});			
	
});

function sendForm() {
	var id = 'dialog1';
	var maskHeight = $(document).height();
	var maskWidth = $(window).width();
	$('#mask').css({'width':maskWidth,'height':maskHeight});
	$('#mask').fadeIn(1000);	
	$('#dialog1').show()
	$('#mask').fadeTo("fast",0.8,function(){
		$.post('Jquery/abreRs_Jquery.cfm',$("#frmJquery").serialize(),function(data,status){
			alert('RS Aberta com Sucesso !');
			location.href('AberturaRS.cfm');
		});
		return alert('erro');
	});
}
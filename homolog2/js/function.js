function checkNavCursos() { 
	if ( $("li").hasClass('active') == true){
		$(".dropdown li.active").parent().parent().toggleClass('active');
	}
	else{
	}
}

function Criar() {
	if ( $("li").hasClass('linkArrow') == true){
		alert("sim");
		var span = document.createElement("span");
		span.innerHTML = "teste";
		span.setAttribute('class', 'icon-arrow-c3');
		document.body.appendChild(span);
	}
	else{
	}
}

function HideSend() {
	$(".inputSubmit").hide();
}


$(document).ready(function(){


	$( ".inputSubmit" ).click(
		function() {
			$(this).hide();
			$(".loadingForm").show();
		});

	$('.dropdown-toggle').dropdown(	);
	
	$("#inputCEP").mask("99999-999");
	//$("#inputTelefones").mask("(99) 999999999");

	checkNavCursos();
});
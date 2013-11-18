	<div class="container footer">
		<address>
			C3 Centro de Capacitação para Concursos - Rua Sete de Setembro, 92 - 2º andar - Grupos 204 e 205 - Centro - Rio de Janeiro - RJ<br />
			Tels.: 21 3553-3486 e 3553-3631    
		</address>
		<p class="copy">
			© Copyright 2013 - C3 Centro de Capacitação para Concursos - Todos os direitos reservados - Desenvolvido por LV Agência Interativa
	  </p>
	</div>
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/function.js"></script>
	<script src="js/hover-dropdown.min.js"></script>
	<script>
	$(function () {
		$('#myTab a').click(function (e) {
			e.preventDefault();
			$(this).tab('show');
		})
	})
	</script>
    <script type="text/javascript" src="../nivo/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="../nivo/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
			effect: 'fade',               // Specify sets like: 'fold,fade,sliceDown'
			animSpeed: 500,                 // Slide transition speed
			pauseTime: 5000,                // How long each slide will show
			controlNavThumbs: false,        // Use thumbnails for Control Nav
			pauseOnHover: true,             // Stop animation while hovering
			randomStart: false,             // Start on a random slide
		});
    });
    </script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Tabacaria Imperio</title>
	<script src="https://kit.fontawesome.com/84ded8d17c.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Cinzel:400,700|Open+Sans:300,400,700&display=swap" rel="stylesheet">
	<link href="style/slick.css" rel="stylesheet" />
	<link href="style/style.css" rel="stylesheet" />
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0"/>
	<meta name="description" content="Tabacaria Imperio Hookah Lounge, venha conosco curtir uma noite fumando narguile, beber uma cervejinha gelada, com valores acessiveis, ambiente climatizado e som ambiente"/>
	<meta name="keywords" content="narguiles,sessões,cervejas,essências,carvão,som">
	<meta name="author" content="Whoami Ghrapic" />
	<link href="favicon.ico" rel="icon" type="image/x-icon" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143059837-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-143059837-1');
	</script>

</head>
<body>

	<header>
		<div class="container">
			<div class="logomarca left"><a style="font-family:Cinzel
			;" href="home">ImperiO</a></div><!--logomarca-->
			<nav class="desktop right">
				<ul>
					<li><a href="home">home</a></li>
					<li><a href="#services">serviços</a></li>
					<li><a href="#sobre">sobre nós</a></li>
					<li><a href="#social">social</a></li>
					<li><a href="#depositions">depoimentos</a></li>
					<li><a href="contact">contato</a></li>
				</ul>		
			</nav><!--desktop-->

			
			<nav class="mobile right">
				<ul>
					<li><a href="home">home</a></li>
					<li><a href="#services">serviços</a></li>
					<li><a href="#sobre">sobre nós</a></li>
					<li><a href="#social">social</a></li>
					<li><a href="#depositions">depoimentos</a></li>
					<li><a href="contact">contato</a></li>
				</ul>
			</nav><!--mobile-->
			<div class="clear"></div><!--clear-->
		</div><!--container-->
	</header>

<?php

	if(isset($_GET['url'])){

		if(file_exists($_GET['url']).'.html'){
			include($_GET['url'].'.html');
		}else{
			include('404.html');
		}
	}else{
		include('home.html');
	}
	
?>

<footer class="footer-1">
		<div class="container">
			<div class="description-single left w33">
				<h2>Endereço:</h2>
				<p><i class="fas fa-map-marked-alt"></i>Av. Presidente Dutra, 2728</p>
				<p><i class="fas fa-map-marked-alt"></i>Bom Jesus</p>
				<p><i class="fas fa-city"></i>Cassilândia - MS</p>
			</div><!--description-single-->

			<div class="description-single left w33">
					<h2>Horário de Funcionamento:</h2>
					<p><i class="far fa-clock"></i>Segunda à Quinta-Feira:<br>15:00 - 02:00 (BR)</p>
					<p><i class="far fa-clock"></i>Sexta à Domingo:<br>15:00 - 04:00 (BR)</p>
			</div><!--description-single-->

			<div class="description-single right w33">
				<h2>Fale Conosco:</h2>
				<p><i class="fas fa-envelope"></i>contato@imperiolounge.com</p>
				<p><i class="fab fa-whatsapp"></i>(67) 98451-3929</p>
				<p><i class="fab fa-whatsapp"></i>(67) 99671-8661</p>
			</div><!--description-single-->
			<div class="clear"></div><!--clear-->
		</div><!--container-->
	</footer><!--footer-1-->

	<footer class="footer2">
		<a href="www.whoamighrapic.com.br">Whoami Ghrapic - Todos os direitos reservados</a>
	</footer>
	<?php $url = isset($_GET['url']) ? $_GET['url'] : 'home';?>
	<?php 
	if($url == 'contact'){
	?>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjCd0JTMOfH45QBKhby9rXMVpUqSsJ4zE"></script>

	<?php } ?>
	<script src="js/jquery.js"></script>
	<?php 
	if($url == 'home'){
	?>
	<script src="js/slick.js"></script>
	<script src="js/slides.js"></script>
	<script src="js/functions.js"></script>	
	<?php } ?>
	<?php 
	if($url == 'contact'){
	?>
	<script src="js/jquery.ajaxform.js"></script>
	<script>
		$(function(){
	$('input[name=telefone]').mask('(99)99999-9999');


		$('form').submit(function(){

			if(formularioPreenchido()){
					var form = $('form');
					$('form').ajaxSubmit({
						beforeSubmit:function(){
							form.find('input[type=submit]').attr('disabled','true');
							form.find('input[type=submit]').animate({'opacity':'0.4'})
							form.find('input[type=submit]').attr('value','Carregando');

						},
						success:function(data){
							//Aqui você pode inserir uma div, por exemplo.
							//Qualquer mensagem de sucesso, após o formulario ter sido enviado.
							alert('Formulário foi enviado com sucesso!');
							form.find('input[type=submit]').removeAttr('disabled');
							form.find('input[type=submit]').animate({'opacity':'1'})
							form.find('input[type=submit]').attr('value','Enviar');
							form[0].reset();
						}
					});
			}else{
				alert("Campos Vázios não são permitidos!");
			}



			return false;
		})

		function formularioPreenchido(){
			var nome = $('[name=nome]').val();
			var email = $('[name=email]').val();
			var telefone = $('[name=telefone]').val();
			var mensagem = $('[name=mensagem]').val();
			if(nome === '' || email === '' || telefone === '' || mensagem === ''){
				return false;
			}else{
				return true;
			}
		}


	})
	</script>
	<script src="js/map.js"></script>
	<script src="js/functions.js"></script>	
	<script src="js/jquery.mask.js"></script>
	<?php } ?>
		
</body>
</html>
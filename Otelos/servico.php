<!DOCTYPE html>
<html lang="pt-br">

<head>

	
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	
    <title>Otelo's BarberShop</title>
	

	<link rel="stylesheet" href="css/reset.css">
	
	<link rel="stylesheet" type="text/css" href="css/slick.css">
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
	<!--ANIMAÇÂO-->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!--LITY-->
	<link rel="stylesheet" type="text/css" href="css/lity.css">
				
	
	<link href="css/paginas2.css" rel="stylesheet" type="text/css">

	
		
	<?php
		require_once("favicon.php");
	?>
	
</head>

<body>
	<!--MENU-->
	<?php
		require_once("menu.php");
	?>

			<!--SERVIÇO-->
			<section class="servico wow bounceInUp delay-1s " ><!--DESTAQUE-->
			<div>							
				<div>
					<h2>Serviços</h2>
					<article class="servicoUm">

						<article><!--corte 1-->
							
							<section>
								<img src="img/corte-degrade.jpg" alt="Destaque 1">
							</section>
							<section>
								<h3>Corte Degradê</h3>
								<p>Tem por base a passagem do cabelo cheio no topo da cabeça para as laterais levemente raspadas, diminuindo levemente o comprimento dos fios até a altura das orelhas.</p>
								<h2>R$ 25,00</h2>
							</section>
						</article><!--fim corte 1-->
						<article><!--corte 2-->
							<section>
								<img src="img/corte-undercorte.jpg" alt="destaque 2">
							</section>
							<section>
								<h3>Corte Undercute</h3>
								<p> Um pouco mais complicado, o undercut é um corte de cabelo que traz influências desde os cortes militares até penteados dos tempos de rockabilly.</p>
								<h2>R$ 20,00</h2>
							</section>
						</article><!--fim corte 2-->
						<article><!--corte 3-->
							<section>
								<img src="img/corte-progressiva.jpg" alt="destaque 2">
							</section>
							<section>
								<h3>progressiva</h3>
								<p> A escova progressiva é um método de alisamento e redução do volume dos cabelos, diminuindo também o frizz.</p>
								<h2>R$ 70,00</h2>
							</section>
						</article><!--fim corte 3-->
						<article><!--corte 4-->
							<section>
								<img src="img/corte-com-luzes.jpg"  alt="destaque 2">
							</section>
							<section>
								<h3>Luzes no Cabelo Masculino</h3>
								<p> Fazer luzes no cabelo masculino é uma maneira simples e versátil de mudar um pouco o visual sem fazer uma transformação radical.</p>
								<h2>R$ 20,00</h2>
							</section>
						</article><!--fim corte 4-->
					</article>
				</div>
			</section>
			<!--INSTA-->
			<?php
				require_once("insta.php");
			?>
			<!--EQUIPE-->
			<?php
				require_once("equipe.php");
			?>

		</div>
	</section>
	<!--RODAPE-->
	<?php
		require_once("rodape.php");
	?>	
				
	
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/lity.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>
	
				
	<script type="text/javascript" src="js/animacao.js"></script>
	
	
	
	
</body>

</html>
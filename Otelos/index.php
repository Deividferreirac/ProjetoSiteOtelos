<!DOCTYPE html>
<html lang="pt-br">

<head>

	
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	
    <title>Otelo's BarberShop</title>
	
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/slick.css">
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/lity.css">
	<link href="css/esstilo2.css" rel="stylesheet" type="text/css">
		
	<?php
		require_once("favicon.php");
	?>
	
</head>

<body>
	<!--MENU-->
	<?php
		require_once("menu.php");
	?>
	<span>
		 <img src="img/otelos.png"	alt="span">
	</span>

	<section class="conteudo">
		<div class="site">
			<!--BANNER-->
			<?php
				require_once("banner.php");
			?>
			<!--SOBRE-->
			<?php
				require_once("item-sobre.php");
			?>
			<!--SERVIÇO-->
			<?php
				require_once("item-servico.php");
			?>
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
	s
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/lity.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>			
	<script type="text/javascript" src="js/animacao.js"></script>
	
</body>

</html>
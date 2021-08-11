<?php
 
    
	
if(isset($_POST["email"])){
	

	

	$assunto	= "Otelo's Barber Shop";
	$nome 		= $_POST["nome"]; 
	$email 		= $_POST["email"];
	$fone 		= $_POST["fone"];
	$mens 		= $_POST["mens"];
	
	
        $phpmail = new PHPMailer(); // Instânciamos a classe PHPmailer para poder utiliza-la          
        $phpmail->isSMTP(); // envia por SMTP
        
        $phpmail->SMTPDebug = 0;
        $phpmail->Debugoutput = 'html';
        
        $phpmail->Host = "smtp.gmail.com"; // SMTP servers         
        $phpmail->Port = 587; // Porta SMTP do GMAIL
        
        $phpmail->SMTPSecure = 'tls';
        $phpmail->SMTPAuth = true;  // Caso o servidor SMTP precise de autenticação   
        
        $phpmail->Username = "deividferreirabili@gmail.com"; // SMTP username         
        $phpmail->Password = "123456789"; // SMTP password          
        $phpmail->IsHTML(true);         
        
        $phpmail->setFrom($email, $nome); // E-mail do remetende enviado pelo method post  
                 
        $phpmail->addAddress("deividferreirabili@gmail.com", "Otelo's Barber Shop");// E-mail do destinatario/*  
        
        $phpmail->Subject = $assunto; // Assunto do remetende enviado pelo method post
                
        $phpmail->msgHTML(" Nome: $nome <br>
                            E-mail: $email <br>
                            Telefone: $fone <br>
                            Mensagem: $mens");
        
        $phpmail->AlrBody = "Nome: $nome \n
                            E-mail: $email \n
                            Telefone: $fone \n
                            Mensagem: $mens";
            
        if($phpmail->send()){              
            echo "A Mensagem foi enviada com sucesso.";
        }else{
            echo "Não foi possível enviar a mensagem. Erro: " .$phpmail->ErrorInfo;
        }
         
        // ############## RESPOSTA AUTOMATICA
        $phpmailResposta = new PHPMailer();        
        $phpmailResposta->isSMTP();
        
        $phpmailResposta->SMTPDebug = 0;
        $phpmailResposta->Debugoutput = 'html';
        
        $phpmailResposta->Host = "smtp.gmail.com";         
        $phpmailResposta->Port = 587;
        
        $phpmailResposta->SMTPSecure = 'tls';
        $phpmailResposta->SMTPAuth = true;     
        
        $phpmailResposta->Username = "deividferreirabili@gmail.com";         
        $phpmailResposta->Password = "123456789";          
        $phpmailResposta->IsHTML(true);         
        
        $phpmailResposta->setFrom($email, $nome); // E-mail do remetende enviado pelo method post  
                 
        $phpmailResposta->addAddress($email, "Site");// E-mail do destinatario/*  
        
        $phpmailResposta->Subject = "Resposta - " .$assunto; // Assunto do remetende enviado pelo method post
                
        $phpmailResposta->msgHTML(" Nome: $nome <br>
                            Em breve daremos o retorno");
        
        $phpmailResposta->AlrBody = "Nome: $nome \n
                            Em breve daremos o retorno";
            
        $phpmailResposta->send();
	
}
    
?>


<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="Keywords" content="Barba, Cabelo">
	<meta name="Description" content="Otelo's Barber Shop">
		
	<title>Contato Otelo's Barber Shop</title>
		
	
	<link rel="stylesheet" href="css/reset.css">
	
	<link rel="stylesheet" type="text/css" href="css/slick.css">
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/lity.css">
	
	<link href="css/contato2.css" rel="stylesheet" type="text/css">
	<!--<link rel="stylesheet" href="css/paginas.css">-->	
	
	<!--FAVICON-->
	<?php
		require_once("favicon.php");
	?>
	
</head>

<body>
	<!--MENU-->
	<?php
		require_once("menu.php");
	?>
	
<div>
		<section class="form site">
		<article>
			<form action="#" method="post">
					
				<legend>Contato</legend>
				
				<p>Nome</p>
				
				<div>
					<input name="nome" placeholder="Digite seu nome:" type="text">
				</div>
				
				<p>E-mail</p>
				
				<div>
					<input name="email" placeholder="Digite seu e-mail:" type="email" required>
				</div>
				
				<p>Telefone</p>
				
				<div>
					<input name="fone" placeholder="Digite seu telefone:" type="tel">
					<p>(Opcional)</p>
				</div>
				
				<p>Mensagem</p>
				
				<div>
					<textarea name="mens" placeholder="Digite sua mensagem:" rows="10" cols="30"></textarea>
				</div>
				
				<div>
					<input type="submit" value="Enviar">
				</div>
					
					
			</form>
		</article>
	</section>
	
	<section class="calendar">
		<a href="https://tecupcomercial.youcanbook.me/" target="_blank">
			<img src="img/calendario.png" alt="click para agendar seu horario">
		</a>
	</section>
		
</div>
	
		
		
	<!--####RODAPE####-->
	<?php
		require_once("rodape.php")	
	?>
	<!--COMANDOS DE JAVA-SCRIPT-->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>
	<script type="text/javascript" src="js/lity.js"></script>
	
		
	<script type="text/javascript" src="js/animacao.js"></script>
</body>
</html>

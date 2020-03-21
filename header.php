<!DOCTYPE html>
<html>
<head>
	<title>BuscaCão</title>
	<meta charset="UTF-8">
	
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">	


</head>

<body bgcolor="6AD394">
	<header>
		<div class="container">
			<a href="?pagina=home"><img src="img/logo.png" title="Logo" alt="Logo"></a>
			<div id="menu">
				<a href="?pagina=perdi">Perdi meu cachorro</a>
				<a href="?pagina=encontrei">Encontrei um cachorro</a>
				<?php if (isset($_SESSION['login'])) { ?>
				<a href="logout.php"><?php echo $_SESSION['usuario']; ?> (Sair) </a>
				<?php }
				else{ ?>
					
					<a href="?pagina=login">Login</a>

					<a href="?pagina=cadastro">Cadastre-se</a>
					
				<?php } ?>
			</div>
		</div>
	</header>
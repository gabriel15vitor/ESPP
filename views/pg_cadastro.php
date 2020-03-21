<!DOCTYPE html>
<html>
<head>
	<title>BuscaCão</title>
	<meta charset="UTF-8">
	
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="../css/estilo.css">

</head>

<body>
	<header>
		<div class="container">
			<a href="../index.php?pagina=home"><img src="../img/logo.png" title="Logo" alt="Logo"></a>
			<div id="menu">
			</div>
		</div>
	</header>

	<div id="conteudo" class="container">
		<form method="post" action="../cadastro.php">

			<label class="badge badge-secondary">Nome completo:</label>
			<input type="text" name="nome" placeholder="Ex: Wesley dos Santos" class="form-control">
			<br>

			<label class="badge badge-secondary">Usuário:</label>
			<input type="text" name="usuario" placeholder="Ex: Wessant" class="form-control">
			<br>
			
			<?php if(isset($_GET['erro_usuario'])) { ?>
				<div class="alert alert-danger" role="alert">
					<center>O usuário cadastrado já existe</center>
				</div>
			<?php } ?>

			<label class="badge badge-secondary">E-mail:</label>
			<input type="email" name="email" placeholder="Ex: wessant@exemplo.com" class="form-control">
			<br>		

			<label class="badge badge-secondary">Senha:</label>
			<input type="password" name="senha" placeholder="Ex: ********" class="form-control">
			<br>

			<label class="badge badge-secondary">Confirmar senha:</label>
			<input type="password" name="conf_senha" placeholder="Ex: ********" class="form-control">
			<br>

			<?php if(isset($_GET['erro_senha'])) { ?>
				<div class="alert alert-danger" role="alert">
					<center>As senhas não coincidem</center>
				</div>
			<?php }elseif (isset($_GET['erro_senha2'])) { ?>
				<div class="alert alert-danger" role="alert">
					<center>A senha é muito fraca</center>
				</div>
			<?php } ?>
			
			<label class="badge badge-secondary">Cidade:</label>
			<input type="text" name="cidade" placeholder="Ex: Campinas" class="form-control">
			<br>

			<label class="badge badge-secondary">Estado:</label>
			<input type="text" name="estado" placeholder="Ex: SP" class="form-control" maxlength="2">
			<br>

			<?php if(isset($_GET['erro_faltando'])) { ?>
				<div class="alert alert-danger" role="alert">
					<center>Você se esqueceu de preencher alguma coisa</center>
				</div>
			<?php } ?>
		
			<input type="submit" value="Cadastrar" class="btn btn-success"></form><br>

			<a href="pg_login.php">Já possui um login? Clique aqui</a>
	</div>

<footer>
	<font color="white">
	<div class="container">
 		©2019 Encontre seu pet perdido - Todos os direitos reservados.
 	</div>

 	<script src="js/jquery.js"></script>
 	<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

 	<script>
 		
 		$(document).ready( function () {
		    $('#cursos').DataTable();
		    $('#alunos').DataTable();
		    $('#matriculas').DataTable();
		} );
 	</script>

</footer>
</body>
</html>
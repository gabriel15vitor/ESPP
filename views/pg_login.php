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
		<form method="post" action="../login.php">

			<label class="badge badge-secondary">Usuário:</label>
			<input type="text" name="usuario" placeholder="Insira o nome do usuario" class="form-control">
			<br>

			<label class="badge badge-secondary">Senha:</label>
			<input type="password" name="senha" placeholder="Insira a senha" class="form-control">
			<br>

			<input type="submit" value="Entrar" class="btn btn-success">
			</form>
			<br>
			
			<a href="pg_cadastro.php">Não possui um login? Cadastre-se</a>
			<br><br>
			<?php if(isset($_GET['erro'])) { ?>
				<div class="alert alert-danger" role="alert">
					<center>Usuário e/ou senha inválidos</center>
				</div>
			<?php } ?>
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
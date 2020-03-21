<div id="conteudo" class="container">
	<form name="form" method="post" action="cadastro.php" enctype="multipart/form-data">

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

		<?php if(isset($_GET['erro_faltando'])) { ?>
			<div class="alert alert-danger" role="alert">
				<center>Preencha todos os campos</center>
			</div>
		<?php } ?>
		<input type="submit" value="Cadastrar" class="btn btn-success">
	</form><br>
	<a href="?pagina=login">Já possui um login? Clique aqui</a>
</div>
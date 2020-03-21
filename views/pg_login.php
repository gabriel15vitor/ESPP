<div id="conteudo" class="container">
	<form method="post" action="login.php" enctype="multipart/form-data">

		<label class="badge badge-secondary">Usuário:</label>
		<input type="text" name="usuario" placeholder="Insira o usuário" class="form-control"
		<?php
			if(!empty($_SESSION['value_usuario'])){
				echo "value='".$_SESSION['value_usuario']."'";
				unset($_SESSION['value_usuario']);
			}
		?>>
		<br>

		<label class="badge badge-secondary">Senha:</label>
		<input type="password" name="senha" placeholder="Insira a senha" class="form-control">
		<br>

		<input type="submit" value="Entrar" class="btn btn-success">
		</form>
		<br>
		
		<a href="?pagina=cadastro">Não possui um login? Cadastre-se</a>
		<br><br>
		<?php if(isset($_GET['erro'])) { ?>
			<div class="alert alert-danger" role="alert">
				<center>Usuário e/ou senha inválidos</center>
			</div>
		<?php } ?>
</div>
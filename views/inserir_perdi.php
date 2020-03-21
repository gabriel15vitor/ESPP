<?php if(!isset($_GET['editar'])){ ?>
	<link rel="stylesheet" href="../css/estilo.css">

	
	<div id="conteudo" class="container">

	<h1>Inserir novo cachorro perdido</h1>
	<form method="post" action="processa_perdi.php" enctype="multipart/form-data">
		<br>
		<label class="badge badge-secondary">Foto:</label><br>
		<input type="file" required name="arquivo">
		<br><br>
		<label class="badge badge-secondary">Raça:</label><br>
		<input class="form-control" type="text" name="raca_perdi" placeholder="Ex: Vira-Lata">
		<br><br>
		<label class="badge badge-secondary">Porte:</label><br>
		<input class="form-control" type="text" name="porte_perdi" placeholder="Ex: Pequeno">
		<br><br>
		<label class="badge badge-secondary">Cor:</label><br>
		<input class="form-control" type="text" name="cor_perdi" placeholder="Ex: Marrom e branco">
		<br><br>
		<label class="badge badge-secondary">Sexo:</label><br>
		<input class="form-control" type="text" name="sexo_perdi" maxlength="1" placeholder="Ex: M/F">
		<br><br>
		<label class="badge badge-secondary">Nome:</label><br>
		<input class="form-control" type="text" name="nome_cachorro_perdi" placeholder="Ex: Chico">
		<br><br>
		<label class="badge badge-secondary">Data:</label><br>
		<input class="form-control" type="date" name="data_perdi" placeholder="Ex: 1991-12-21">
		<br><br>
		<label class="badge badge-secondary">Descrição:</label><br>
		<textarea class="form-control" type="text" name="descricao_perdi" placeholder="Ex: Foi perdido no dia 'X', possui uma coleira da cor 'Y' ..."></textarea>
		<br><br>
		<label class="badge badge-secondary">Estado:</label><br>
		<input class="form-control" type="text" name="estado_perdi" maxlength="2" placeholder="Ex: SP">
		<br><br>
		<label class="badge badge-secondary">Cidade:</label><br>
		<input class="form-control" type="text" name="cidade_perdi" placeholder="Ex: Campinas">
		<br><br>
		<label class="badge badge-secondary">Bairro:</label><br>
		<input class="form-control" type="text" name="bairro_perdi" placeholder="Ex: Cambuí">
		<br><br>
		<label class="badge badge-secondary">Telefone:</label><br>
		<input class="form-control" type="text" name="telefone_perdi" maxlength="11" placeholder="Ex: 19 987654321">
		<br><br>
		<input type="submit" class="btn btn-success" value="Inserir"><br><br>
	</form>
	</div>
<?php }else{ ?>
	<?php while($linha = mysqli_fetch_array($consulta_perdi)){ ?>
		<?php if($linha['id_perdi'] == $_GET['editar']){ ?>
			<div id="conteudo" class="container">
			<h1>Editar cachorro perdido</h1>
			<form method="post" action="edita_perdi.php">
				<input type="hidden" name="id_perdi" value="<?php echo $linha['id_perdi']; ?>">
				<label class="badge badge-secondary">Raça:</label><br>
				<input class="form-control" type="text" name="raca_perdi" placeholder="Ex: Vira-Lata">
				<br><br>
				<label class="badge badge-secondary">Porte:</label><br>
				<input class="form-control" type="text" name="porte_perdi" placeholder="Ex: Pequeno">
				<br><br>
				<label class="badge badge-secondary">Cor:</label><br>
				<input class="form-control" type="text" name="cor_perdi" placeholder="Ex: Marrom e branco">
				<br><br>
				<label class="badge badge-secondary">Sexo:</label><br>
				<input class="form-control" type="text" name="sexo_perdi" maxlength="1" placeholder="Ex: M/F">
				<br><br>
				<label class="badge badge-secondary">Nome:</label><br>
				<input class="form-control" type="text" name="nome_cachorro_perdi" placeholder="Ex: Chico">
				<br><br>
				<label class="badge badge-secondary">Data:</label><br>
				<input class="form-control" type="date" name="data_perdi" placeholder="Ex: 1991-12-21">
				<br><br>
				<label class="badge badge-secondary">Descrição:</label><br>
				<textarea class="form-control" type="text" name="descricao_perdi" placeholder="Ex: Foi perdido no dia 'X', possui uma coleira da cor 'Y' ..."></textarea>
				<br><br>
				<label class="badge badge-secondary">Estado:</label><br>
				<input class="form-control" type="text" name="estado_perdi" maxlength="2" placeholder="Ex: SP">
				<br><br>
				<label class="badge badge-secondary">Cidade:</label><br>
				<input class="form-control" type="text" name="cidade_perdi" placeholder="Ex: Campinas">
				<br><br>
				<label class="badge badge-secondary">Bairro:</label><br>
				<input class="form-control" type="text" name="bairro_perdi" placeholder="Ex: Cambuí">
				<br><br>
				<label class="badge badge-secondary">Telefone:</label><br>
				<input class="form-control" type="text" name="telefone_perdi" maxlength="11" placeholder="Ex: 19 987654321">
				<br><br>
				<input type="submit" class="btn btn-success" value="Inserir"><br><br>
			</form>
		</div>
		<?php } ?>
	<?php } ?>
<?php } ?>

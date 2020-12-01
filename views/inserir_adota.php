<?php if(!isset($_GET['editar'])){ ?>
	<link rel="stylesheet" href="../css/estilo.css">

	
	<div id="conteudo" class="container">
		<h1>Inserir pet para adoção</h1>
	<form method="post" action="processa_adota.php" enctype="multipart/form-data">
		<br>
		<label class="badge badge-secondary">Foto:</label><br>
		<input type="file" required name="arquivo">
		<br><br>
		<label class="badge badge-secondary">Raça:</label><br>
		<input class="form-control" type="text" name="raca_adota" placeholder="Ex: Vira-Lata">
		<br><br>
		<label class="badge badge-secondary">Porte:</label><br>
		<input class="form-control" type="text" name="porte_adota" placeholder="Ex: Pequeno">
		<br><br>
		<label class="badge badge-secondary">Cor:</label><br>
		<input class="form-control" type="text" name="cor_adota" placeholder="Ex: Marrom e branco">
		<br><br>
		<label class="badge badge-secondary">Sexo:</label><br>
		<input class="form-control" type="text" name="sexo_adota" maxlength="1" placeholder="Ex: M/F">
		<br><br>
		<label class="badge badge-secondary">Descrição:</label><br>
		<textarea class="form-control" type="text" name="descricao_adota" placeholder="Ex: Achou no dia 'X', possui uma coleira da cor 'Y' ..."></textarea>
		<br><br>
		<label class="badge badge-secondary">Estado:</label><br>
		<input class="form-control" type="text" name="estado_adota" maxlength="2" placeholder="Ex: SP">
		<br><br>
		<label class="badge badge-secondary">Cidade:</label><br>
		<input class="form-control" type="text" name="cidade_adota" placeholder="Ex: Campinas">
		<br><br>
		<label class="badge badge-secondary">Bairro:</label><br>
		<input class="form-control" type="text" name="bairro_adota" placeholder="Ex: Cambuí">
		<br><br>
		<label class="badge badge-secondary">Telefone:</label><br>
		<input class="form-control" type="text" name="telefone_adota" maxlength="11" placeholder="Ex: 19987654321">
		<br><br>
		<input type="submit" class="btn btn-success" value="Inserir"><br><br>
	</form>
	</div>

<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_adota)){ ?>
		<?php if($linha['id_adota'] == $_GET['editar']){ ?>
			<div id="conteudo" class="container">
			<h1>Editar pet para adoção</h1>
				<form method="post" action="edita_adota.php">
					<input type="hidden" name="id_adota" value="<?php echo $linha['id_adota']; ?>">
					<label class="badge badge-secondary">Raça:</label><br>
					<input class="form-control" type="text" name="raca_adota" placeholder="Ex: Vira-Lata">
					<br><br>
					<label class="badge badge-secondary">Porte:</label><br>
					<input class="form-control" type="text" name="porte_adota" placeholder="Ex: Pequeno">
					<br><br>
					<label class="badge badge-secondary">Cor:</label><br>
					<input class="form-control" type="text" name="cor_adota" placeholder="Ex: Marrom e branco">
					<br><br>
					<label class="badge badge-secondary">Sexo:</label><br>
					<input class="form-control" type="text" name="sexo_adota" maxlength="1" placeholder="Ex: M/F">
					<br><br>
					<label class="badge badge-secondary">Descrição:</label><br>
					<textarea class="form-control" type="text" name="descricao_adota" placeholder="Ex: Foi perdido no dia 'X', possui uma coleira da cor 'Y' ..."></textarea>
					<br><br>
					<label class="badge badge-secondary">Estado:</label><br>
					<input class="form-control" type="text" name="estado_adota" maxlength="2" placeholder="Ex: SP">
					<br><br>
					<label class="badge badge-secondary">Cidade:</label><br>
					<input class="form-control" type="text" name="cidade_adota" placeholder="Ex: Campinas">
					<br><br>
					<label class="badge badge-secondary">Bairro:</label><br>
					<input class="form-control" type="text" name="bairro_adota" placeholder="Ex: Cambuí">
					<br><br>
					<label class="badge badge-secondary">Telefone:</label><br>
					<input class="form-control" type="text" name="telefone_adota" maxlength="11" placeholder="Ex: 19987654321">
					<br><br>
					<input type="submit" class="btn btn-success" value="Inserir"><br><br>
				</form>
			</div>
			<?php } ?>
	<?php } ?>
<?php } ?>
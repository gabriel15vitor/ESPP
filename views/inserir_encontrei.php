<?php if(!isset($_GET['editar'])){ ?>
	<link rel="stylesheet" href="../css/estilo.css">

	
	<div id="conteudo" class="container">
		<h1>Inserir novo pet encontrado</h1>
	<form method="post" action="processa_encontrei.php" enctype="multipart/form-data">
		<br>
		<label class="badge badge-secondary">Foto:</label><br>
		<input type="file" required name="arquivo">
		<br><br>
		<label class="badge badge-secondary">Raça:</label><br>
		<input class="form-control" type="text" name="raca_encontrei" placeholder="Ex: Vira-Lata">
		<br><br>
		<label class="badge badge-secondary">Porte:</label><br>
		<input class="form-control" type="text" name="porte_encontrei" placeholder="Ex: Pequeno">
		<br><br>
		<label class="badge badge-secondary">Cor:</label><br>
		<input class="form-control" type="text" name="cor_encontrei" placeholder="Ex: Marrom e branco">
		<br><br>
		<label class="badge badge-secondary">Sexo:</label><br>
		<input class="form-control" type="text" name="sexo_encontrei" maxlength="1" placeholder="Ex: M/F">
		<br><br>
		<label class="badge badge-secondary">Você o abrigou?</label><br>
		<input class="form-control" type="text" name="abrigo_encontrei" maxlength="1" placeholder="Ex: S/N">
		<br><br>
		<label class="badge badge-secondary">Data:</label><br>
		<input class="form-control" type="date" name="data_encontrei" placeholder="Ex: 1991-12-21">
		<br><br>
		<label class="badge badge-secondary">Descrição:</label><br>
		<textarea class="form-control" type="text" name="descricao_encontrei" placeholder="Ex: Achou no dia 'X', possui uma coleira da cor 'Y' ..."></textarea>
		<br><br>
		<label class="badge badge-secondary">Estado:</label><br>
		<input class="form-control" type="text" name="estado_encontrei" maxlength="2" placeholder="Ex: SP">
		<br><br>
		<label class="badge badge-secondary">Cidade:</label><br>
		<input class="form-control" type="text" name="cidade_encontrei" placeholder="Ex: Campinas">
		<br><br>
		<label class="badge badge-secondary">Bairro:</label><br>
		<input class="form-control" type="text" name="bairro_encontrei" placeholder="Ex: Cambuí">
		<br><br>
		<label class="badge badge-secondary">Telefone:</label><br>
		<input class="form-control" type="text" name="telefone_encontrei" maxlength="11" placeholder="Ex: 19987654321">
		<br><br>
		<input type="submit" class="btn btn-success" value="Inserir"><br><br>
	</form>
	</div>

<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_encontrei)){ ?>
		<?php if($linha['id_encontrei'] == $_GET['editar']){ ?>
			<div id="conteudo" class="container">
			<h1>Editar pet encontrado</h1>
				<form method="post" action="edita_encontrei.php">
					<input type="hidden" name="id_encontrei" value="<?php echo $linha['id_encontrei']; ?>">
					<label class="badge badge-secondary">Raça:</label><br>
					<input class="form-control" type="text" name="raca_encontrei" placeholder="Ex: Vira-Lata">
					<br><br>
					<label class="badge badge-secondary">Porte:</label><br>
					<input class="form-control" type="text" name="porte_encontrei" placeholder="Ex: Pequeno">
					<br><br>
					<label class="badge badge-secondary">Cor:</label><br>
					<input class="form-control" type="text" name="cor_encontrei" placeholder="Ex: Marrom e branco">
					<br><br>
					<label class="badge badge-secondary">Sexo:</label><br>
					<input class="form-control" type="text" name="sexo_encontrei" maxlength="1" placeholder="Ex: M/F">
					<br><br>
					<label class="badge badge-secondary">Você o abrigou?</label><br>
					<input class="form-control" type="text" name="abrigo_encontrei" maxlength="1" placeholder="Ex: S/N">
					<br><br>
					<label class="badge badge-secondary">Data:</label><br>
					<input class="form-control" type="date" name="data_encontrei" placeholder="Ex: 1991-12-21">
					<br><br>
					<label class="badge badge-secondary">Descrição:</label><br>
					<textarea class="form-control" type="text" name="descricao_encontrei" placeholder="Ex: Foi perdido no dia 'X', possui uma coleira da cor 'Y' ..."></textarea>
					<br><br>
					<label class="badge badge-secondary">Estado:</label><br>
					<input class="form-control" type="text" name="estado_encontrei" maxlength="2" placeholder="Ex: SP">
					<br><br>
					<label class="badge badge-secondary">Cidade:</label><br>
					<input class="form-control" type="text" name="cidade_encontrei" placeholder="Ex: Campinas">
					<br><br>
					<label class="badge badge-secondary">Bairro:</label><br>
					<input class="form-control" type="text" name="bairro_encontrei" placeholder="Ex: Cambuí">
					<br><br>
					<label class="badge badge-secondary">Telefone:</label><br>
					<input class="form-control" type="text" name="telefone_encontrei" maxlength="11" placeholder="Ex: 19987654321">
					<br><br>
					<input type="submit" class="btn btn-success" value="Inserir"><br><br>
				</form>
			</div>
			<?php } ?>
	<?php } ?>
<?php } ?>
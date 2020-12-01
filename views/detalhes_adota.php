<!DOCTYPE html>
<html>
<body>
	<center><h4><span class="badge badge-secondary">PET PARA ADOÇÃO</span></h4></center>

	<br>
	<?php
		include 'db.php';

		$id_adota = $_GET['id_adota'];

		$query = "SELECT * FROM ADOTA WHERE ID_ADOTA= $id_adota";
		$consulta_dog = mysqli_query($conexao, $query);
		$linha_dog = mysqli_fetch_array($consulta_dog);
		$usu = $linha_dog['usuario_adota'];

		$query = "SELECT * FROM USUARIOS WHERE USUARIO = '$usu'";
		$consulta_usu = mysqli_query($conexao, $query);
		$linha_usuario = mysqli_fetch_array($consulta_usu);
		$nome_usu = $linha_usuario['nome'];

		$raca = $linha_dog['raca_adota'];
		$porte = $linha_dog['porte_adota'];
		$cor = $linha_dog['cor_adota'];
		$sexo = $linha_dog['sexo_adota'];
		if ($sexo == "M" || $sexo == "m") {
			$sexo = "Masculino";
		}else{
			$sexo = "Feminino";
		}
		$descricao = $linha_dog['descricao_adota'];
		$estado = $linha_dog['estado_adota'];
		$cidade = $linha_dog['cidade_adota'];
		$bairro = $linha_dog['bairro_adota'];
		$telefone = $linha_dog['telefone_adota'];
		$ddd = substr($telefone, 0, 2);
		$telefone = substr($telefone, 2);
		$foto = "upload/adota/".$linha_dog['arquivo_foto_adota'];
	?>
			<img src="" alt="">
	<table class="table table-bordered table-dark">
		<thead>
		</thead>
		<tbody>
			<tr>
				<td>
					<?php echo "<img src='".$foto."'width='300' height='300'></img>" ?>
				</td>
				<td>
					<?php echo "Raça: ".$raca; ?>
					<br>
					<?php echo "Porte: ".$porte; ?>
					<br>
					<?php echo "Cor: ".$cor; ?>
					<br>
					<?php echo "Sexo: ".$sexo; ?>
					<br>
					<?php echo "Descrição: ".$descricao; ?>
					<br>
					<?php echo "Localização: ".$bairro.", ".$cidade." - ".$estado; ?>
					<br>
					<?php echo "Telefone: (".$ddd.") ".$telefone; ?>
					<br>
					<?php echo "Tratar com ".$nome_usu; ?>
					<br>
							
				</td>
			</tr>
		</tbody>
	</table>

	<?php
	if (isset($_SESSION['login'])) {
		$user = $_SESSION['usuario'] ;
		
		if ($user == $usu) {?>
			<center>
			<a href="index.php?pagina=inserir_adota&editar=<?php echo $linha_dog['id_adota']; ?>" class="badge badge-primary">Editar</a>
			<a href="deleta_adota.php?id_adota=<?php echo $linha_dog['id_adota']; ?>" class="badge badge-primary">Deletar</a>
			</center>
	<?php }}?>

	</div>
</body>
</html>
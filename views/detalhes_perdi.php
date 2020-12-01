<html>
<body>
	<br><br>

	<center><h4><span class="badge badge-secondary">PET PERDIDO</span></h4></center>
	
	<br>

	<?php 

	include 'db.php';

	$id_perdi = $_GET['id_perdi'];

	$query = "SELECT * FROM PERDI WHERE ID_PERDI = $id_perdi";
	$consulta_dog = mysqli_query($conexao, $query);
	$linha_dog = mysqli_fetch_array($consulta_dog);
	
	$usu = $linha_dog['usuario_perdi'];

	$query = "SELECT * FROM USUARIOS WHERE USUARIO = '$usu'";
	$consulta_usu = mysqli_query($conexao, $query);
	$linha_usuario = mysqli_fetch_array($consulta_usu);
	$nome_usu = $linha_usuario['nome'];

	$raca = $linha_dog['raca_perdi'];
	$porte = $linha_dog['porte_perdi'];
	$cor = $linha_dog['cor_perdi'];
	$sexo = $linha_dog['sexo_perdi'];
	if ($sexo == "M" || $sexo == "m") {
		$sexo = "Masculino";
	}else{
		$sexo = "Feminino";
	}
	$nome_cachorro = $linha_dog['nome_cachorro_perdi'];
	
	$data = $linha_dog['data_perdi'];
	$data = $linha_dog['data_perdi'];
	$dia = substr($data, 8, 2);
	$mes = substr($data, -5, -3);
	$ano = substr($data, 0, 4);
	$data = $dia.'/'.$mes.'/'.$ano;

	$descricao = $linha_dog['descricao_perdi'];
	$estado = $linha_dog['estado_perdi'];
	$cidade = $linha_dog['cidade_perdi'];
	$bairro = $linha_dog['bairro_perdi'];
	$telefone = $linha_dog['telefone_perdi'];
	$ddd = substr($telefone, 0, 2);
	$telefone = substr($telefone, 2);
	$foto = "upload/perdi/".$linha_dog['arquivo_foto_perdi'];
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
					<?php echo "Nome do cachorro: ".$nome_cachorro; ?>
					<br>
					<?php echo "Data de perda: ".$data; ?>
					<br>
					<?php echo "Descrição: ".$descricao; ?>
					<br>
					<?php echo "Localização: ".$bairro.", ".$cidade." - ".$estado; ?>
					<br>
					<?php echo "Telefone: (".$ddd.") ".$telefone; ?>
					<br>
					<?php echo "Tratar com ".$nome_usu; ?>
					<br>

					<?php
						if (isset($_SESSION['login'])) {
							$user = $_SESSION['usuario'] ;
							
							if ($user == $usu) {?>
								<center>
								<a href="../index.php?pagina=inserir_perdi&editar=<?php echo $linha_dog['id_perdi']; ?>" class="badge badge-primary">Editar</a>
								<a href="../deleta_perdi.php?id_perdi=<?php echo $linha_dog['id_perdi']; ?>" class="badge badge-primary">Deletar</a>
								</center>
					<?php }}?>
							
				</td>
			</tr>
		</tbody>
	</table>


</div>

</body>
</html>

<html>
<head>
	<title>BuscaCão</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="../css/estilo.css">
	<?php session_start(); ?>
</head>

<body>
	<header>
		<div class="container">
			<a href="../index.php?pagina=home"><img src="../img/logo.png" title="Logo" alt="Logo"></a>
			<div id="menu">
				<a href="../index.php?pagina=perdi">Perdi meu cachorro</a>
				<a href="../index.php?pagina=encontrei">Encontrei um cachorro</a>
				<?php if (isset($_SESSION['login'])) { ?>
				<a href="../logout.php"><?php echo $_SESSION['usuario']; ?> (Sair) </a>
				<?php }
				else{ ?>
					<a href="pg_login.php">Login</a>
					
					<a href="pg_cadastro.php">Cadastre-se</a>
				<?php } ?>
			</div>
		</div>
	</header>

		<br><br>

		<center><h4><span class="badge badge-secondary">CACHORRO ENCONTRADO</span></h4></center>

		<br>

		<?php
		include '../db.php';

		$id_encontrei = $_GET['id_encontrei'];

		$query = "SELECT * FROM ENCONTREI WHERE ID_ENCONTREI = $id_encontrei";
		$consulta_dog = mysqli_query($conexao, $query);
		$linha_dog = mysqli_fetch_array($consulta_dog);
		$usu = $linha_dog['usuario_encontrei'];

		$query = "SELECT * FROM USUARIOS WHERE USUARIO = '$usu'";
		$consulta_usu = mysqli_query($conexao, $query);
		$linha_usuario = mysqli_fetch_array($consulta_usu);
		$nome_usu = $linha_usuario['nome'];

		$query = "SELECT * FROM USUARIOS";
		$consulta = mysqli_query($conexao, $query);
		$linha = mysqli_fetch_array($consulta);
		$adm = $linha['adm'];

		$raca = $linha_dog['raca_encontrei'];
		$porte = $linha_dog['porte_encontrei'];
		$cor = $linha_dog['cor_encontrei'];
		$sexo = $linha_dog['sexo_encontrei'];
		if ($sexo == "M" || $sexo == "m") {
			$sexo = "Masculino";
		}else{
			$sexo = "Feminino";
		}
		$abrigo = $linha_dog['abrigo_encontrei'];
		if ($abrigo == "s" || $abrigo == "S") {
			$abrigo = "Sim";
		}else{
			$abrigo = "Não";
		}
		
		$data = $linha_dog['data_encontrei'];
		$data = $linha_dog['data_encontrei'];
		$dia = substr($data, 8, 2);
		$mes = substr($data, -5, -3);
		$ano = substr($data, 0, 4);
		$data = $dia.'/'.$mes.'/'.$ano;

		$descricao = $linha_dog['descricao_encontrei'];
		$estado = $linha_dog['estado_encontrei'];
		$cidade = $linha_dog['cidade_encontrei'];
		$bairro = $linha_dog['bairro_encontrei'];
		$telefone = $linha_dog['telefone_encontrei'];
		$ddd = substr($telefone, 0, 2);
		$telefone = substr($telefone, 2);
		$foto = "../upload/encontrei/".$linha_dog['arquivo_foto_encontrei'];
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
						<?php echo "Abrigou: ".$abrigo; ?>
						<br>
						<?php echo "Data de encontro: ".$data; ?>
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
			
			$query = "SELECT * FROM USUARIOS WHERE USUARIO = '$user'";
			$consulta = mysqli_query($conexao, $query);
			$linha = mysqli_fetch_array($consulta);
			$adm = $linha['adm'];
			
			if (($user == $usu) || ($adm == 1)) {?>
				<center>
				<a href="../index.php?pagina=inserir_encontrei&editar=<?php echo $linha_dog['id_encontrei']; ?>" class="badge badge-primary">Editar</a>
				<a href="../deleta_encontrei.php?id_encontrei=<?php echo $linha_dog['id_encontrei']; ?>" class="badge badge-primary">Deletar</a>
				</center>
		<?php }}?>

	</div>

<footer>
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
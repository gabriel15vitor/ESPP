<div class="container">

<?php 
	if (!(isset($_SESSION['login']))) {?>
		<br>
		<center><a href="views/pg_login.php" class="badge badge-warning">Para adicionar uma publicação é necessario login</a></button><center>
	<?php }else{ ?>

		<center>
			<br>
			<a class="btn btn-success" href="?pagina=inserir_encontrei">Inserir novo pet encontrado</a>
		</center>
	<?php } ?>

<br><br><br>

<center><h4><span class="badge badge-secondary">PETS PERDIDOS</span></h4></center>

<br><br>

<table class="table table-hover table-striped" id="alunos">
	<thead>
		<tr>
			<th>Foto</th>
			<th>Raça</th>
			<th>Local</th>
			<th>Data</th>
			<th>Telefone</th>
			<th>Detalhes</th>
		</tr>
	</thead>

	<tbody>
		<?php
			while($linha = mysqli_fetch_array($consulta_perdi)){
				echo '<td><img src="upload/perdi/'.$linha['arquivo_foto_perdi'].'" alt="foto" width="250" height="200"></img></td>';
				echo '<td>'.$linha['raca_perdi'].'</td>';
				echo '<td>'.$linha['bairro_perdi'].', '.$linha['cidade_perdi'].' - '.$linha['estado_perdi'].'</td>';
				$data = $linha['data_perdi'];
				$dia = substr($data, -2);
				$mes = substr($data, -5, -3);
				$ano = substr($data, 0, 4);
				$data = $dia.'/'.$mes.'/'.$ano;
				echo '<td>'.$data.'</td>';
				echo '<td>'.$linha['telefone_perdi'].'</td>';
		?>

			<td><a href="index.php?pagina=detalhes_perdi&id_perdi=<?php echo $linha['id_perdi']; ?>">Detalhes</a></td></tr>

		<?php
			}
		?>
	</tbody>

</table>
<br><br><br><br>
<?php 

include 'db.php';

$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$query = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
$consulta_user = mysqli_query($conexao, $query);
$linha = mysqli_fetch_array($consulta_user);
$usu = $linha['usuario'];

if (is_null($nome) || is_null($usuario) || is_null($email) || is_null($senha) || is_null($conf_senha) || is_null($cidade) || is_null($estado)) {
	header('location: views/pg_cadastro.php?erro_faltando');
}elseif ($usuario == $usu) {
	header('location: views/pg_cadastro.php?erro_usuario');
}elseif ($senha != $conf_senha) {
	header('location:views/pg_cadastro.php?erro_senha');
}elseif (strlen($senha) <= 8) {
	header('location:views/pg_cadastro.php?erro_senha2');
}else{
	$query = "INSERT INTO USUARIOS(nome, usuario, email, senha, cidade, estado) VALUES('$nome', '$usuario', '$email', '$senha', '$cidade', '$estado')";

	mysqli_query($conexao, $query);
	header('location:views/pg_login.php');
}

?>
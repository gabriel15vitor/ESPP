<?php 

include_once "banco.php";
//include_once "db.php";
include_once "usuario.php";

$database = new Database();
$db = $database->getConnection();

$usuarioDAO = new Usuario($db);

$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$res = $usuarioDAO->readOne($usuario);
$num = $res->rowCount();
/*
$query = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
$consulta_user = mysqli_query($conexao, $query);
$linha = mysqli_fetch_array($consulta_user);
*/

if (is_null($nome) || is_null($usuario) || is_null($email) || is_null($senha) || is_null($conf_senha) || is_null($cidade) || is_null($estado)) {
	header('location: index.php/pg_cadastro.php?erro_faltando');
}elseif ($num > 0) {
	header('location: index.php/pg_cadastro.php?erro_usuario');
}elseif ($senha != $conf_senha) {
	header('location: index.php/pg_cadastro.php?erro_senha');
}elseif (strlen($senha) <= 8) {
	header('location: index.php/pg_cadastro.php?erro_senha2');
}else{
	if ($usuarioDAO->insert($nome, $usuario, $email, $senha)) {
		header('location:views/pg_login.php');
	}else{
		echo "falhou";
	}
}

?>
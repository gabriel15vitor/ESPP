<?php 

include_once "banco.php";
include_once "usuario.php";

$database = new Database();
$db = $database->getConnection();

$usuarioDAO = new Usuario($db);

$user = isset($_POST['usuario']) ? $_POST['usuario'] : null;
$pass = isset($_POST['senha']) ? $_POST['senha'] : null;

$res = $usuarioDAO->login($user, $pass);
$num = $res->rowCount();
if (is_null($user) || is_null($pass)) {
	header('location:index.php?pagina=login&erro');
}else{
	if ($num > 0) {
		session_start();
		$_SESSION['login'] = true;
		$_SESSION['usuario'] = $user;
		header('location:index.php?pagina=home');
	}else{
		$_SESSION['value_usuario'] = $user;
		header('location:index.php?pagina=login&erro');
	}
}

?>
<?php
#Iniciar sessão
session_start();

# Base de dados
include 'db.php';

# Cabeçalho
include 'header.php';

# Conteúdo da página
#if (isset($_SESSION['login'])) {
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}
	else{
		$pagina = 'home';
	}
/*}else{
	$pagina = 'home';
}*/

switch($pagina){
	case 'perdi': include 'views/perdi.php'; break;
	case 'encontrei': include 'views/encontrei.php'; break;
	case 'inserir_encontrei': include 'views/inserir_encontrei.php'; break;
	case 'inserir_perdi': include 'views/inserir_perdi.php'; break;
	case 'login': include 'views/pg_login.php'; break;
	case 'cadastro': include_once 'views/pg_cadastro.php'; break;
	default: include 'views/home.php'; break;
}

# Rodapé
include 'footer.php';
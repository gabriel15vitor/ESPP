<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "espp";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query = "SELECT * FROM PERDI";
$consulta_perdi = mysqli_query($conexao, $query);

$query = "SELECT * FROM ENCONTREI";
$consulta_encontrei = mysqli_query($conexao, $query);

$query = "SELECT * FROM USUARIOS";
$consulta_usuarios = mysqli_query($conexao, $query);
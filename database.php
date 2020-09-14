<?php



$servidor = "localhost";
$usuario = "root";
$senha = "";
$database= "lanchonete";


$conexao = mysqli_connect ($servidor, $usuario,$senha,$database);

$query = "SELECT * FROM bauru";
$consulta_bauru = mysqli_query($conexao,$query);

$query = "SELECT * FROM cachorroquente";
$consulta_cachorroquente = mysqli_query($conexao,$query);

$query = "SELECT * FROM batatafrita";
$consulta_batatafrita = mysqli_query($conexao,$query);


$query = "SELECT * FROM pastel";
$consulta_pastel = mysqli_query($conexao,$query);

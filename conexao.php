<?php
$usuario = 'JoaoPaulo';
$senha = '3500';
$database = 'login';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die('Falha ao conectar ao banco de dados: '.$mysqli->error);
}
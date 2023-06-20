<?php

$usuario = "root";
$senha = "";
$host = "localhost";
$database = "login";


$mysqli = new mysqli($host,$usuario,$senha,$database);

if($mysqli->error){
    die(" banco de dados nao conectado ". $mysqli->error);
}



?>
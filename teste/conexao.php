<?php
    $hostname = 'localhost';
    $bancodedados = 'php';
    $usuario = 'root';
    $senha = '';

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
    if($mysqli->connect_errno){
        echo 'Falha ao conectar';
    }else{
        echo 'Conectado !';
    }
?>
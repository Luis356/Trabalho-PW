<?php

    $nome = $_POST["nom"];
    $sobrenome = $_POST["sb"];
    $email = $_POST["ema"];
    $idade = $_POST["ida"];
    $cep = $_POST["cp"];
    $cidade = $_POST["cit"];
    $logradouro = $_POST["logr"];
    $bairro= $_POST["br"];
    $ddd = $_POST["dd"];
    $uf = $_POST["uf"];
    
    require_once("conexao.php");

    $inserindo = "INSERT INTO dados VALUES (null, '$nome', '$sobrenome', '$email', '$idade', '$cep', '$cidade', '$logradouro', '$bairro', '$ddd', '$uf')";

    $result = $con->query($inserindo);

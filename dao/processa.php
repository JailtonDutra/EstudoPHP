<?php

    include_once("connection.php");
    $data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
    $query = "INSERT INTO datas(data) VALUES ('$data')";
    $resultado = mysqli_query($conn, $query);    
    
    if($resultado){
        echo"cadastrado com sucesso";
    }else{
        echo"Deu ruim...";
    }

    /*
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);    
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);    
    $query = "INSERT INTO usuarios(nome,email) VALUES ('$nome','$email')";
    $resultado = mysqli_query($conn, $query);
     */   
?>


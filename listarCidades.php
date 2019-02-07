<?php
    include_once("dao/conexao.php");
    $id_recebido = $_REQUEST['id_estado'];
    $busca = "SELECT * FROM cidades WHERE estados_id=$id_recebido ORDER BY nome";
    $resultado_busca = mysqli_query($conn, $busca);
    while ($rows = mysqli_fetch_assoc($resultado_busca)) {
        $cidades[] = array(
            'id' => $rows['id'],
            'nome' => utf8_encode($rows['nome'])
        );
    }
    echo(json_encode($cidades));
?>
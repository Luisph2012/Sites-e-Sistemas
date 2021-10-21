<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
        $nome        = $_POST["nome_processador"];
        $serial      = $_POST["serial_processaor"];
        $threads     = $_POST["threads_processador"];
        $consumo     = $_POST["consumo_processador"];

        $sql = "INSERT INTO processadores (nome_processador, serial_processaor, threads_processador, consumo_processador) VALUES ('{$nome}', '{$serial}', '{$threads}' , '{$consumo}')";

        $res = $conn->query($sql) or die ($conn -> error);
        
        if ($res==true){
            print "<script>alert('Cadastrado com sucesso!');</script>";

            print "<script>location.href='?page=processadores-consultar';</script>";
        }else{
            print "<div class='alert alert-success'>Não foi possivel Cadastrar!</div>";
        }

        break;

    }
?>

<?php
    // Conexão
    require_once 'db_connect.php';

    if (isset($_POST['btn-cadastrar'])):
        $dia = mysqli_escape_string($connect, $_POST['dia']);
        $hora = mysqli_escape_string($connect, $_POST['hora']);
        $produto = mysqli_escape_string($connect, $_POST['produto']);
        $quantidade = mysqli_escape_string($connect, $_POST['quantidade']);
        $valor = mysqli_escape_string($connect, $_POST['valor']);


        $sql = "INSERT INTO fgastos (dia, hora, produto, quantidade, valor) VALUES ('$dia', '$hora', '$produto', '$quantidade', '$valor')";

        if (mysqli_query($connect, $sql)):
            header('Location: ../index.php?Sucesso');
        else:
            header('Location: ../index.php?Erro');
        endif;
    endif;
?>
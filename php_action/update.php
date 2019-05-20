<?php
    // Sessão
    session_start();
    // Conexão
    require_once 'db_connect.php';

    if (isset($_POST['btn-editar'])):
        $datacompra = mysqli_escape_string($connect, $_POST['datacompra']);
        $estabelecimento = mysqli_escape_string($connect, $_POST['estabelecimento']);
        $produto = mysqli_escape_string($connect, $_POST['produto']);
        $marca = mysqli_escape_string($connect, $_POST['marca']);
        $quantidade = mysqli_escape_string($connect, $_POST['quantidade']);
        $valor = mysqli_escape_string($connect, $_POST['valor']);

        $id = mysqli_escape_string($connect, $_POST['id']);


        $sql = "UPDATE fgastos SET datacompra='$datacompra', estabelecimento='$estabelecimento', produto='$produto', marca='$marca', quantidade='$quantidade', valor='$valor' WHERE id = '$id'";

        if (mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Editado com sucesso!";
            header('Location: ../index.php');
        else:
            $_SESSION['mensagem'] = "Erro ao editar!";
            header('Location: ../index.php');
        endif;
    endif;
?>
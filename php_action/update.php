<?php
    // Sessão
    session_start();
    // Conexão
    require_once 'db_connect.php';

    if (isset($_POST['btn-editar'])):
        $datacompra = mysqli_escape_string($connect, $_POST['datacompra']);
        $estabelecimento = mysqli_escape_string($connect, $_POST['estabelecimento']);
        $produto = mysqli_escape_string($connect, $_POST['produto']);
        $categoria = mysqli_escape_string($connect, $_POST['categoria']);
        $marca = mysqli_escape_string($connect, $_POST['marca']);
        $quantidade = mysqli_escape_string($connect, $_POST['quantidade']);
        $unidade = mysqli_escape_string($connect, $_POST['unidade']);
        $valor = mysqli_escape_string($connect, $_POST['valor']);
        $pagamento = mysqli_escape_string($connect, $_POST['pagamento']);

        $id = mysqli_escape_string($connect, $_POST['id']);


        $sql = "UPDATE fgastos SET datacompra='$datacompra', estabelecimento='$estabelecimento', produto='$produto', categoria='$categoria', marca='$marca', quantidade='$quantidade', unidade='$unidade', valor='$valor', pagamento='$pagamento' WHERE id = '$id'";

        if (mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Editado com sucesso!";
            header('Location: ../index.php');
        else:
            $_SESSION['mensagem'] = "Erro ao editar!";
            header('Location: ../index.php');
        endif;
    endif;
?>
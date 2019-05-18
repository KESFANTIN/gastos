<?php
    // Sessão
    session_start();
    // Conexão
    require_once 'db_connect.php';
    //Clear
    function clear($input) {
        global $connect;
        // Sql
        $var = mysqli_escape_string($connect, $input);
        // xss
        $var = htmlspecialchars($var);
        return $var;
    }


    if (isset($_POST['btn-cadastrar'])):
        $datacompra = mysqli_escape_string($connect, $_POST['datacompra']);
        $hora = mysqli_escape_string($connect, $_POST['hora']);
        $produto = mysqli_escape_string($connect, $_POST['produto']);
        $quantidade = mysqli_escape_string($connect, $_POST['quantidade']);
        $valor = mysqli_escape_string($connect, $_POST['valor']);


        $sql = "INSERT INTO fgastos (datacompra, hora, produto, quantidade, valor) VALUES ('$datacompra', '$hora', '$produto', '$quantidade', '$valor')";

        if (mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Cadastrado com sucesso!";
            header('Location: ../index.php');
        else:
            $_SESSION['mensagem'] = "Erro ao cadastrar!";
            header('Location: ../index.php');
        endif;
    endif;
?>
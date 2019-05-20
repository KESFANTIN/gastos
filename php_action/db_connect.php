<?php
    // Conexão com o banco de dados Local
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $db_name = "gastos";

    //Conexão com o banco de dados Servidor
    $servername = "194.5.156.36";
    $username = "u408799680_dtdf";
    $password = "Kesfantin266899";
    $db_name = "u408799680_comp";

    $connect = mysqli_connect($servername, $username, $password, $db_name);

    mysqli_set_charset($connect, "utf8");

    if (mysqli_connect_error()):
        echo "Erro na Conexão: ".mysqli_connect_error();
    endif;

?>
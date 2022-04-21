<?php
    session_start();
    include_once "config.php";

    $outgoing_id = $_SESSION['unique_id'];

    $usuario = "SELECT tipo_usuario FROM users WHERE unique_id = {$outgoing_id} AND tipo_usuario = 'Empleado'";

    $result = mysqli_query($conn, $usuario);

    if(mysqli_num_rows($result) > 0){
        $sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND tipo_usuario = 'Cliente' ORDER BY user_id DESC";
    }else{
        $sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND tipo_usuario = 'Empleado' ORDER BY user_id DESC";
    }

    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No hay usuarios disponibles";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>
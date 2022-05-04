<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        if(isset($incoming_id)){
            $status = "Conectado/a";
            $sql = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id={$_POST['incoming_id']}");
        }
    }else{  
        header("location: ../login.php");
    }
?>
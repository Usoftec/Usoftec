<?php
    
    session_start();

    include 'conexion_be.php';

    $user = $_POST['user'];
    $password = $_POST['password'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE user='$user' and password='$password'");

    if(mysqli_num_rows($validar_login)>0){
        $_SESSION['user']=$user;
        header("location: ../home.php");
        exit;
    }else{
        echo '
        <script>
            alert("El usuario no existe");
            window.location = "../login.php";
        </script>
        ';
        exit;
    }

?>
<?php
include "config.php";
$id_user = $_POST['id_user'];
$password = md5($_POST['password']);
    if (empty($id_user)){
        echo "<script>alert('Username belum diisi')</script>"; 
        echo "<meta http-equiv='refresh' content='1 url=login.php'>"; 
    }
    else if (empty($password)){
        echo "<script>alert('Password belum diisi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=login.php'>";
    }
    else{
        session_start();
    
$login = mysqli_query($mysqli, "select * from pembeli where id_user='$id_user' and password='$password'");
        if (mysqli_num_rows($login) > 0){
            $_SESSION['id_user'] = $id_user;
            header("location:pembelian.php");
    }
        else{
            echo "<script>alert('Username atau Password salah')</script>";
            echo "<meta http-equiv='refresh' content='1 url=login.php'>";
        }
    }
    ?>
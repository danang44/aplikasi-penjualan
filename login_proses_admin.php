<?php
include "config.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
    if (empty($username)){
        echo "<script>alert('Username belum diisi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=login_admin.php'>";
    }
    else if (empty($password)){
        echo "<script>alert('Password belum diisi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=login_admin.php'>";
    }
    else{
        session_start();
$login = mysqli_query($mysqli, "select * from admin where username='$username' and password='$password'");
    if (mysqli_num_rows($login) > 0){
        $_SESSION['username'] = $username;
        header("location:home_admin.php");
    }else{
        echo "<script>alert('Username atau Password salah')</script>";
        echo "<meta http-equiv='refresh' content='1 url=login_admin.php'>";
}
}

?>
<?php
    include "connect.php";
    $uname = $_POST['username'];
    $pwd = $_POST['pass'];

    if ($uname=='admin' && $pwd=='admin') {
        session_start();
        $_SESSION['logged_user']=$uname;
        header ("location: dashboard.php?Login=sukses");
    }
    else {
        header ("location: login.php?Login=gagal");
    }

?>
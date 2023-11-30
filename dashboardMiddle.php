<?php
    if(isset($_POST['logout'])){
        $_SESSION['email'] = null;
        $_SESSION['password'] = null;
        $_SESSION['login'] = false;
        header('Location: ./login.php');
    }

    if(isset($_POST['manageSelf'])){
        header('Location: ./manageSelf.php');
    }

    if(isset($_POST['manageOthers'])){
        header('Location: ./manageOthers.php');

    }
?>
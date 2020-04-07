<?php
    session_start();
    $username;
    $password;
    if (isset($_POST['loginSubmit'])){
        if (isset($_POST['username'])) {
            $username = $_POST['username'];
        }
        if (isset($_POST['password'])){
            $password = $_POST['password'];
        }
        if ($username=='nhantran1234' && $password==='1'){
            $_SESSION['username'] = $username;
            
        }
    }
    header('Location:index.php');

?>
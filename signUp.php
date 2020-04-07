<?php
    session_start();
    $_SESSION['signUp'] = !$_SESSION['signUp'];
    header('Location:index.php');

?>
<?php
   // session_start();
   // $_SESSION['signUp'] = !$_SESSION['signUp'];
   // header('Location:index.php');
   $username;
   $password;
   $lname;
   if(isset($_POST['signUpSubmit'])) {
        if(empty($_POST['lname'])) {
             header('Location:index.php?errSignUp=emptyName');
             exit();
          }
        else {
             $lname = $_POST['lname'];
             if (!preg_match("/^[a-zA-Z ]+$/",$lname)){
                    header('Location:index.php?errSignUp=validName');
                    exit();
             }
        }  
        if(empty($_POST['username'])) {
             header('Location:index.php?errSignUp=emptyUsername');  
             exit();
          }
        else {
             $username = $_POST['username'];
             if (!preg_match("/^[a-zA-Z0-9]{8,24}$/",$username)){
                    header('Location:index.php?errSignUp=validUsername');
                    exit();
             }
        }  
        if(empty($_POST['password'])) {
             header('Location:index.php?errSignUp=emptyPassword'); 
             exit();
          }
        else {
             $password = $_POST['password'];
             if (!preg_match("/^[a-zA-Z0-9]{6,16}$/",$password)){
                  header('Location:index.php?errSignUp=validPassword');
                  exit();
             }
        }
        $database = fopen("database.txt", "a") or die("Unable to open file!");
        fwrite($database, $lname);
        fwrite($database, ",");
        fwrite($database, $username);
        fwrite($database, ",");
        fwrite($database, $password);
        fwrite($database, "\n");
        fclose($database);
   }
   header('Location:index.php?errSignUp=noErr');
?>
<?php
session_start();

if(!isset($_SESSION['attempt'])) $_SESSION['attempt']=0;

if($_POST){
    if($_POST['user']=="admin" && $_POST['pass']=="123"){
        echo "Welcome!";
    } else {
        $_SESSION['attempt']++;
        if($_SESSION['attempt']>=3)
            echo "Blocked!";
        else
            echo "Try again";
    }
}
?>

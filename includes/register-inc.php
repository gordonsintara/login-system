<?php
    if(isset($_POST['submit'])){
        require'../config/db.php';

        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm-password'];


    if (empty($username) || empty($password) || empty($confirm_password)){
        header("Location: ../register.php?error=emptyfields&username=".$username);
        exit();

    }elseif (!preg_match("/^[a-zA-z0-9]8/", $username)){
        header("Location: ../register.php?error=invalidusername&username=".$username);
        exit();
    }elseif ($password !== $confirm_password){
        header("Location: ../register.php?error=passwordsdonotmatch&username=".$username);
        exit();

    }else{
        $sql = "SELECT username FROM users WHERE username = ?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../register.php?error=sqlerror");
            exit();
        }else{
            

        }
    }




}

 
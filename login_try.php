<?php
    include "connect.php";
    session_start();

    $user = $_POST["txtUser"];
    $pass = $_POST["txtPass"];
    
    $qry = "SELECT * FROM users WHERE user_name = '".$user."'";
    //echo $qry;
    $res = $con->query($qry);

    $msg = "";
    if($res->num_rows > 0)
    {
        //user exists
        $row = $res->fetch_assoc();
        if($row["pass"] == $pass)
        {
            $_SESSION["user"] = $user;
            $msg = "Login Succesful !!";
            
            header("Location:main.php");
        }
        else
        {            
            $msg = "Invalid password";
            header("Location:index.php?Message=$msg");
        }
    }
    else
    {
        $msg = "The Username: ".$user." does not exist!";
        header("Location:login.php?Message=$msg");
    }

    //header("Location:login.php?Message=$msg");  // comment this code, just for debugging
?>
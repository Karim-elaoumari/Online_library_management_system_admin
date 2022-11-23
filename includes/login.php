<?php
require "database.php";
session_start();
if(isset($_POST['sign-in'])){
    $email =$_POST["email"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM admins where email ='$email' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
           $_SESSION["user_id"]         =          $row["id"];
           $_SESSION["user_first_name"] =          $row["first_name"];
           $_SESSION["user_last_name"]  =          $row["last_name"];
           $_SESSION["user_email"]      =          $row["email"];
           $_SESSION["user_password"]   =          $row["password"];
           $_SESSION["user_photo"]      =          $row["photo"];
           header("location:dashboard.php");
    }
    else if($password!=$row["password"] && $email!=$row['email']){
            $_SESSION['danger'] = 'Wrong password and Email !';
            header("location:index.php");

    }
    
    }

?>
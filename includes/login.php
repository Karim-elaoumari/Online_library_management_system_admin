<?php
require "database.php";
session_start();
if(isset($_POST['sign-in'])){
    $email =$_POST["email"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM admins";
    $result = mysqli_query($conn, $sql);
    $iss=0;
    if (mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){
        if($email==$row['email'] && $password==$row["password"]){
           $iss=1;
           session_start();
           $_SESSION["user_id"]         =          $row["id"];
           $_SESSION["user_first_name"] =          $row["first_name"];
           $_SESSION["user_last_name"]  =          $row["last_name"];
           $_SESSION["user_email"]      =          $row["email"];
           $_SESSION["user_password"]   =          $row["password"];
           $_SESSION["user_photo"]      =          $row["photo"];
           header("location:dashboard.php");
        }
        else if($email==$row['email']){
            $_SESSION['danger'] = 'Wrong Password Try again !';
        }
        else if($password==$row["password"]){
            $_SESSION['danger'] = 'Email not Existing!';

        }
        else{
            $_SESSION['danger'] = 'Wrong password and Email !';

        }
    }
    }
}


if(isset($_POST['delete_acc'])){
    $id   = $_SESSION["user_id"];
    $sql = "DELETE FROM `admins` WHERE `id`='$id'";
        if (mysqli_query($conn, $sql)){
            session_destroy();
            session_start();
            $_SESSION['message'] = 'Account deleted seccessefuly ';

            
        }
}
?>
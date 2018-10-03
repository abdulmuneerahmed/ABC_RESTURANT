<?php
session_start();

$connect = mysqli_connect("localhost","root","","resturant");

if(isset($_POST["username"]) && isset($_POST["password"])){

         $sql = "SELECT * FROM users WHERE username = '".$_POST["username"]."' AND password = '".$_POST["password"]."' ";
         $result = mysqli_query($connect, $sql);
       
         if(mysqli_num_rows($result) > 0){
                
                 $_SESSION["username"] = $_POST["username"];
                 echo 'Welcome'.$_SESSION["username"];
                 header('location:home.php');
         }
         else{
                 echo 'No';
         }
}


?>
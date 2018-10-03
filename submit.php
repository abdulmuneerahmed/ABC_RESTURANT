<?php 
session_start();
$username = $_SESSION['username'];
$connect = mysqli_connect("localhost","root","","resturant");
if ($connect->connect_error) 
    	{
       			die("Connection failed: " . $connect->connect_error);
    	}

if(isset($_POST["item"]) && isset($_POST["quantity"]) && isset($_POST["amount"])){
	$item = $_POST["item"];
	$quantity = $_POST["quantity"];
	$amount = $_POST["amount"];
	$today_date="'".date('Y-m-d')."'";

	$sql = "INSERT INTO records VALUES ($today_date,'$username','$item',$quantity,$amount)";
	$result = mysqli_query($connect, $sql);
	if($result == true){
		echo "success";
	}
	else{
		echo "fail";
	}
}
?>
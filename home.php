<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>ABC Resturant</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="responsive.css">
	<script type="text/javascript">
		$(document).ready(function(){
			$('#order').click(function(){
				// $('#report').remove();
				$('.result').load('order.php');
			});
			$('#report').click(function(){
				$('.report1').load('report.php');
				$('.report2').load('line.php');
				$('.report3').load('bar.php');
			});

		});
	</script>
	<style type="text/css">
		ul {
                   list-style-type: none;
                   margin: 0;
                   padding: 0;
                   overflow: hidden;
                   background-color: #333;
                   }

                li {
                    float: left;
                }
                
                li a {
                    display: block;
                    color: white;
                    text-align: center;
                    padding: 14px 16px;
                    text-decoration: none;
                }

               li a:hover {
                   background-color: #111;
               }
	</style>
</head>
<body>
<div class="row container">
   <div class="col-12" align="center">
   <?php
   //home.php
   
   if(!isset($_SESSION["username"]))
   {
    header("location: form.php");
   }
   echo '<h1>'.$_SESSION["username"].' - Welcome to Home Page</h1>';
   
   ?>
   </div>
</div>
<div class="page">
   <div class="row menu">
   	<div class="col-12">
   		<ul class="nav">
   		     <li><a href="#" id="order">Order</a></li>
   		     <li><a href="#" id="report">Report</a></li>
   		     <li><a href="logout.php">Logout</a></li>
   	        </ul>	
   	</div>
   	  			
   </div>

   <div class="row">
   	<div class="col-4">
   		<div class="result"></div>
   	</div>
   	<div class="col-8">
   		<div class="report">
   		
   		             <div class="row">
   			           <div class="col-12 report1">
   			           	
   			           </div>
   		             </div>
   		             <div class="row">
   			           <div class="col-12 report2"></div>
   		             </div>
   		             <div class="row">
   			           <div class="col-12 report3"></div>
   		             </div>
   		</div>
   	</div>
   </div>
  
 </div>
</body>
</html>
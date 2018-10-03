<?php 
$connect = mysqli_connect("localhost","root","","resturant");

$sql="SELECT item, SUM(quantity) as Quantity FROM records GROUP BY item";

$result = mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link rel="stylesheet" type="text/css" media="screen" href="responsive.css" />
	<script type="text/javascript">
	   google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);
           function drawChart(){
           	var data = google.visualization.arrayToDataTable([  
                          ['Item', 'Quantity'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["item"]."', ".$row["Quantity"]."],";  
                          }  
                          ?>  
                     ]);
           	var options = {  
                      title: 'Product sold by Quantity',  
                      is3D:true,  
                      // pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options)
           }
	</script>
</head>
<body>
	<div class="row">
           <div class="col-4"style="width:300px;"></div>
           <div class="col-4" >      
                <div id="piechart" style="width: 500px; height: 500px;"></div>  
           </div> 
           <div class="col-4"></div>
   </div>
</body>
</html>
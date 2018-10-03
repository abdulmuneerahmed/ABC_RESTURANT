<?php 
$connect = mysqli_connect("localhost","root","","resturant");

$sql="SELECT CONCAT_WS('    item:',date ,item) as item, SUM(quantity) as amount FROM records GROUP BY item";

$result = mysqli_query($connect, $sql);
while($row = mysqli_fetch_array($result))  
     {  
          
      $amount[] = $row["item"];
      $quantity[] = $row["amount"];
      
     } 
     
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
                          ['Item', 'TotalAmount'],  
                          <?php  
                           foreach (array_combine($amount,$quantity) as $x => $y) {
                             # code...
                            echo "['".$x."', ".$y."],"; 
                           }
                          ?>  
                     ]);
           	var options = {  
                      title: 'Percentage of Product sold by Quantity',  
                      is3D:true,
                      curveType: 'function',
                      // legend: { position: 'bottom' }
                      pointSize: 6,
                      vAxis: {minValue:0, maxValue:10,gridlines:{count:6}},
                      // pieHole: 0.4  
                     };  
                var chart = new google.visualization.LineChart(document.getElementById('Linechart'));  
                chart.draw(data, options)
           }
	</script>
</head>
<body>
	<div class="row">
           <div class="col-4"style="width:300px;"></div>
           <div class="col-4" >      
                <div id="Linechart" style="width: 500px; height: 500px;"></div>  
           </div> 
           <div class="col-4"></div>
   </div>
</body>
</html>
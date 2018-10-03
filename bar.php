<?php 
$connect = mysqli_connect("localhost","root","","resturant");

$sql="SELECT CONCAT_WS('    Quantity:',item ,SUM(quantity)) as item, SUM(amount) as amount FROM records GROUP BY item";

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
                      title: 'Product Wise Sales',  
                      is3D:true,  
                      // pieHole: 0.4  
                     };  
                var chart = new google.visualization.BarChart(document.getElementById('barchart'));  
                chart.draw(data, options)
           }
  </script>
</head>
<body>
  <div class="row">
           <div class="col-4"style="width:300px;"></div>
           <div class="col-4" >      
                <div id="barchart" style="width: 400px; height: 400px;"></div>  
           </div> 
           <div class="col-4"></div>
   </div>
</body>
</html>
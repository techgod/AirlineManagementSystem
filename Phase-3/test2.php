<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    
    var data = google.visualization.arrayToDataTable([
                                                     ['Month', 'Bookings per Month'],
                                                     <?php
                                                     $servername = "localhost";
                                                     $username = "root";
                                                     $password = "";
                                                     $dbname = "airline";
                                                     
                                                     
                                                     //OPENING CONNECTION
                                                     $conn = mysqli_connect($servername, $username, $password, $dbname);
                                                     
                                                     
                                                     
                                                     $sql = "SELECT DESIGNATION, COUNT(*) AS NO_OF_EMPLOYEES FROM EMPLOYEE GROUP BY DESIGNATION;";
                                                     
                                                     $result = mysqli_query($conn, $sql);
                                                     
                                                     if (!$result) {
                                                     printf("Error: %s\n", mysqli_error($conn));
                                                     exit();
                                                     }
                                                     
                                                     while($row = mysqli_fetch_array($result))
                                                     {
                                                     echo "['".$row["DESIGNATION"]."', ".$row["NO_OF_EMPLOYEES"]."],";
                                                     }
                                                     
                                                     ?>
                                                     ]);
    
    var options = {
    title: 'Bookings - Month Wise'
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
    chart.draw(data, options);
}
</script>
</head>
<body>
<div id="piechart" style="width: 900px; height: 500px;"></div>
</body>
</html>

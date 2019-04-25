<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "airline";
    
    
    //OPENING CONNECTION
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    $sql = "INSERT INTO BOOKINGS VALUES
    ('PQ764L','2019-03-15 00:00:00','2019-03-31 00:00:00','PSY 101',10400),
    ('XM64L','2019-03-16 00:00:00','2019-04-27 00:00:00','PSY 101',12400),
    ('AM65L','2019-03-15 00:00:00','2019-04-27 00:00:00','PSY 139',10400),
    ('BN92D','2019-03-15 00:00:00','2019-04-27 00:00:00','PSY 101',8800),
    ('NC3YIU','2019-03-15 00:00:00','2019-04-27 00:00:00','PSY 101',6300),
    ('QJRHC','2019-03-15 00:00:00','2019-04-27 00:00:00','PSY 101',6300),
    ('2HH326','2019-03-21 00:00:00','2019-04-27 00:00:00','PSY 139',8800),
    ('D2JDIU2','2019-03-21 00:00:00','2019-04-27 00:00:00','PSY 139',6300),
    ('2HDI22E','2019-03-21 00:00:00','2019-04-27 00:00:00','PSY 139',6300),
    ('2JIE2DIO','2019-03-21 00:00:00','2019-04-27 00:00:00','PSY 139',6300),
    ('HD2UHD','2019-03-21 00:00:00','2019-04-27 00:00:00','PSY 139',14500),
    ('JEH9DE','2019-03-21 00:00:00','2019-04-27 00:00:00','PSY 101',10600),
    ('DIOE2J','2019-03-21 00:00:00','2019-04-27 00:00:00','PSY 101',6000),
    ('CWIOJO','2019-03-21 00:00:00','2019-04-27 00:00:00','PSY 254',10600),
    ('IUEWHC','2019-03-21 00:00:00','2019-04-27 00:00:00','PSY 254',10600),
    ('COCE2','2019-03-21 00:00:00','2019-04-27 00:00:00','PSY 254',12990),
    ('COIE2E','2019-03-21 00:00:00','2019-04-27 00:00:00','PSY 254',10600),
    ('JHI2OEJ','2019-03-22 00:00:00','2019-04-27 00:00:00','PSY 254',8990),
    ('IO2O2JI','2019-03-22 00:00:00','2019-04-24 00:00:00','PSY 752',10600),
    ('929IDN2','2019-03-22 00:00:00','2019-04-27 00:00:00','PSY 752',12990),
    ('DJIO2E9','2019-03-21 00:00:00','2019-04-21 00:00:00','PSY 752',10600),
    ('D2IOJ9','2019-03-21 00:00:00','2019-04-27 00:00:00','PSY 752',10600),
    ('D2NBDH','2019-03-22 00:00:00','2019-04-27 00:00:00','PSY 752',8880),
    ('DSMWOKD','2019-03-22 00:00:00','2019-04-27 00:00:00','PSY 101',12990),
    ('OI21JDO','2019-03-22 00:00:00','2019-04-27 00:00:00','PSY 254',6300),
    ('JDO2EK','2019-03-22 00:00:00','2019-04-27 00:00:00','PSY 752',6300),
    ('IJWIOJD','2019-03-21 00:00:00','2019-04-27 00:00:00','PSY 752',6300),
    ('EQWDN2','2019-03-21 00:00:00','2019-04-22 00:00:00','PSY 254',11990),
    ('CIOWJIO2','2019-03-22 00:00:00','2019-04-27 00:00:00','PSY 101',12600),
    ('IOECJIC9','2019-03-21 00:00:00','2019-04-27 00:00:00','PSY 254',6300),
    ('CLKDSNL','2019-03-21 00:00:00','2019-04-27 00:00:00','PSY 139',14500),
    ('IOJDEOW','2019-03-22 00:00:00','2019-04-27 00:00:00','PSY 101',6300),
    ('CCIOWJC','2019-03-21 00:00:00','2019-04-27 00:00:00','PSY 254',6300),
    ('CJWOIO8','2019-03-21 00:00:00','2019-04-27 00:00:00','PSY 752',11990),
    ('ERBNVJR','2019-03-21 00:00:00','2019-04-27 00:00:00','PSY 752',6300),
    ('VIERVJKE','2019-03-22 00:00:00','2019-03-24 00:00:00','PSY 752',11990),
    ('VEFJKEF','2019-03-23 00:00:00','2019-04-27 00:00:00','PSY 101',10600),
    ('UIEVEFW','2019-03-24 00:00:00','2019-04-27 00:00:00','PSY 101',6000),
    ('IUEFKJE','2019-03-25 00:00:00','2019-04-30 00:00:00','PSY 101',10600),
    ('IVEJHEF','2019-03-24 00:00:00','2019-04-27 00:00:00','PSY 101',10600),
    ('UHEIUF','2019-03-24 00:00:00','2019-04-27 00:00:00','PSY 752',12990),
    ('IUCEHUI','2019-03-28 00:00:00','2019-04-27 00:00:00','PSY 139',10600),
    ('JVFKNN2','2019-03-29 00:00:00','2019-05-04 00:00:00','PSY 101',8990),
    ('NJKVEFKJ','2019-03-30 00:00:00','2019-04-27 00:00:00','PSY 139',10600),
    ('98RVNVR','2019-03-31 00:00:00','2019-03-24 00:00:00','PSY 752',12990),
    ('VQIJRND','2019-04-01 00:00:00','2019-04-27 00:00:00','PSY 101',10600),
    ('RVJOEW','2019-04-02 00:00:00','2019-04-27 00:00:00','PSY 139',10600),
    ('CEWLKM','2019-04-03 00:00:00','2019-05-09 00:00:00','PSY 139',8880),
    ('KLECM2','2019-04-04 00:00:00','2019-05-10 00:00:00','PSY 139',12990),
    ('KMLECM1','2019-04-05 00:00:00','2019-04-27 00:00:00','PSY 101',6300),
    ('CEJDNJKE','2019-04-06 00:00:00','2019-04-27 00:00:00','PSY 571',6300),
    ('JKWDCJK','2019-04-07 00:00:00','2019-04-27 00:00:00','PSY 571',6300),
    ('JWQKK','2019-04-08 00:00:00','2019-05-09 00:00:00','PSY 571',11990),
    ('WIJKLCWD','2019-04-09 00:00:00','2019-05-23 00:00:00','PSY 571',6300),
    ('IUWHEKL','2019-04-10 00:00:00','2019-04-27 00:00:00','PSY 571',8800),
    ('CUWHLK','2019-04-11 00:00:00','2019-04-27 00:00:00','PSY 571',6300),
    ('OIWEJCI','2019-04-12 00:00:00','2019-05-10 00:00:00','PSY 800',6300),
    ('OIWECOI','2019-04-13 00:00:00','2019-05-23 00:00:00','PSY 832',6300),
    ('IUCHW','2019-04-14 00:00:00','2019-05-10 00:00:00','PSY 832',14500),
    ('ICWCW','2019-04-15 00:00:00','2019-04-27 00:00:00','PSY 832',10600),
    ('CHHECJK','2019-04-16 00:00:00','2019-04-27 00:00:00','PSY 832',12990),
    ('IUCDHLK','2019-04-17 00:00:00','2019-05-23 00:00:00','PSY 832',10600),
    ('HCWKL','2019-04-18 00:00:00','2019-05-23 00:00:00','PSY 832',10600),
    ('FHEBW','2019-04-19 00:00:00','2019-05-10 00:00:00','PSY 901',8880),
    ('FEJH2','2019-04-20 00:00:00','2019-04-27 00:00:00','PSY 901',12990),
    ('ECJ13R','2019-04-21 00:00:00','2019-04-27 00:00:00','PSY 901',6300),
    ('EHWBCV','2019-04-22 00:00:00','2019-04-27 00:00:00','PSY 901',6300),
    ('EHIUHEUW','2019-04-23 00:00:00','2019-05-23 00:00:00','PSY 901',6300),
    ('EHWI7CE','2019-04-24 00:00:00','2019-05-10 00:00:00','PSY 901',11990),
    ('ICUEHIU','2019-04-25 00:00:00','2019-05-10 00:00:00','PSY 901',6300);";
    
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    
    $sql = "SELECT MONTH(BOOKING_DATE) AS MONTH,COUNT(*) AS NO_OF_BOOKINGS FROM BOOKINGS GROUP BY MONTH(BOOKING_DATE);";
    
    $result = mysqli_query($conn, $sql);
    
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo " " . $row["DESTINATION"]. " " . $row["ORIGIN"]. " " . $row["FLIGHT_NO"]. " " . $row["DEP_TIME"].$row["ARV_TIME"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    while($row = mysqli_fetch_array($result))
    {
        echo "['".$row["MONTH"]."', ".$row["NO_OF_BOOKINGS"]."],";
    }
    mysqli_close($conn);
    ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Admin Dashboard</title>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
   
    var data = google.visualization.arrayToDataTable([
                                                     ['Designation', 'Number Of Employees'],
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
                                                     mysqli_close($conn);
                                                     ?>
                                                     ]);
    
    
      var options = {
    title: 'Employee Distribution'
    };
    
    
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
    chart.draw(data, options);
    
    //Column Chart
    var data2 = google.visualization.arrayToDataTable([
                                                     ['Month', 'Bookings per Month'],
                                                     <?php
                                                     $servername = "localhost";
                                                     $username = "root";
                                                     $password = "";
                                                     $dbname = "airline";
                                                     
                                                     
                                                     //OPENING CONNECTION
                                                     $conn = mysqli_connect($servername, $username, $password, $dbname);
                                                     
                                                     
                                                     
                                                      $sql = "SELECT MONTH(BOOKING_DATE) AS MONTH,COUNT(*) AS NO_OF_BOOKINGS
                                                      FROM BOOKINGS GROUP BY MONTH(BOOKING_DATE);";
                                                     
                                                     $result = mysqli_query($conn, $sql);
                                                     
                                                     if (!$result) {
                                                     printf("Error: %s\n", mysqli_error($conn));
                                                     exit();
                                                     }
                                                     
                                                     while($row = mysqli_fetch_array($result))
                                                     {
                                                     echo "['".$row["DESIGNATION"]."', ".$row["NO_OF_EMPLOYEES"]."],";
                                                     }
                                                     mysqli_close($conn);
                                                     ?>
                                                     ]);
    
    var view2 = new google.visualization.DataView(data2);
    view2.setColumns([0, 1,
                    { calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation" },
                    2]);
    
    var options2 = {
    title: "Density of Precious Metals, in g/cm^3"
    };
    
    var chart2 = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
    chart2.draw(view2, options2);
}
</script>
</head>
<body>
<h1>Statistics</h1>
<div id="piechart" style="width: 900px; height: 500px;"></div>
<div id="columnchart_values" style="width: 1000px; height: 380px;"></div>
</body>
</html>

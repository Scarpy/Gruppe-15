<?php 
    //database variable
    $databasehost = "8889";
    $username = "databasetest";
    $password = "password";
    $database = "test";

    $connection = new PDO ("mysql:host=localhost;dbname={$database};port={$port}", $username, $password);
    
    $statement = $connection ->prepare('SELECT * FROM tbl_test');
    $statement ->execute();

    $row = $statement ->fetch(PDO::FETCH_ASSOC);

    echo '<pre>';
    print_r($row);
    die();
?>
<html>
  <head>
    <link href="pieChart.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawPopularityChart);
      function drawPopularityChart() {
        var data = google.visualization.arrayToDataTable([
          ['Beers', 'Prices'],
          ['Beer',     36],
          ['Hish',      20],
          ['Mie',  10],
          ['Deut', 49],
          ['Seep',    59]
        ]);

        var options = {
          title: 'Beers',
          pieHole: 0.4,
          backgroundColor: '#d6e6e8',
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
      <div id="container">
        <div id="donutchart" style="width: 100%; height: 100%; display: block;"></div>
      </div>
  </body>
</html>
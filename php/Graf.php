<!DOCTYPE html

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="../css/Style.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>

        <script src="../js/getheader().js" type="text/javascript"></script>
        
        <title>Graf </title>
        
         <?php  
    include 'bin/getdata.php';
    
    $array = hyppighed();
         ?>
        
        
    </head>
     <body onload="getheader();">        
        <header id="header">
        </header>     
        
         <div class="container chart">
  <div class="row">
    <div class="col-sm">
        
    <div id="chart_div"></div>
        
    </div>
  </div>
</div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

   google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

             var data = google.visualization.arrayToDataTable([
            ['Sko størelse', 'Hyppighed '],
        // Get data from sql
        <?php foreach($array as $key => $value)
                {
                    echo $value;
                }
        ?>
    ]);

      var options = {
        title: 'Hyppighed skostørelse 33-50',
       
        vAxis: {
          title: 'Hyppighed'
        }
      };

      var chart = new google.visualization.ColumnChart(
        document.getElementById('chart_div'));

      chart.draw(data, options);
    }

     
    </script>
         
    </div>
</div>

    </body>
</html>

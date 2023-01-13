<?php 
session_start();  
$stfid=$_SESSION["username"];
 if(isset($_SESSION["username"]))  
 {  
 	$dbh= new PDO("mysql:host=localhost;dbname=attendance", "root", "");
  $sql="SELECT * FROM users WHERE username = ?";
  $query=$dbh->prepare($sql);
  $query->execute(array($stfid));
  $results=$query->fetchAll(PDO::FETCH_OBJ);
   if($query->rowCount()>0){

    foreach ($results as $result) {
       $result->fullname;
   ?> 
  <div class="loginname">
 
  <?php	
 	echo $result->fullname; 	
       
    }
  }
  
  ?>
  </div>

 	<?php
  }  
  else  
 {  
      header("location:stafflogin.php");  
 }  
 ?>


<!DOCTYPE html>
<html>
    <head>
        <title>Attendance Management System</title>
        <link rel="stylesheet" href="../css/style2.css">
        <head>
            <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
            <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
            <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
            <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" type="text/css" rel="stylesheet">
            <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css" type="text/css" rel="stylesheet">
            <style type="text/css">
              #container {
                width:500px;
                height: 400px;
                position:absolute;
                bottom: 100px;
                left:190px;
                top: 130px;
              }
              #container2 {
                width:500px;
                height: 400px;
                position:absolute;
                bottom: 100px;
                right:15px;
                top: 130px;
              }
              .ttlnav{
                border: 1px solid #ddd;
                width: 150px;
                height: auto;
                margin: 70px 0px 0px 0px;
                border-radius: 0px 15px 0px 0px;

              }

              .ttlnav a{
                display: block;
                border: 1px solid #ddd;
                padding: 10px 0px;
                text-align: center;
                text-decoration: none;
                color: #000;
              }

              .ttl{
                border-radius: 0px 14px 0px 0px;
                padding: 10px 10px;
                background: #2B7F9F;
                color: #fff;
                text-align: center;

                }
                .logout img{
                	position: absolute;
                	right: 35px;
                	margin-top: 55px;
                  width: 20px;
                  height: 20px;
                }
                .loginname{
                	position: absolute;
                	right: 80px;
                	margin-top: 55px;
                  color: #2b7f9f;
                }

              </style>
    </head>
    <body>
      <div class="logos">
  <div class="tchattdview">Staff</div>
  <img src="icons/urlogo.png" class="urlogo">
  <div class="urname">University Of</div>
  <div class="rda">Rwanda</div> 
  <div class="logout"><a href="stafflogout.php" onclick="return confirm(' Are you Sure want to Logout ?')">
  <img src="icons/logout1.png"></a> </div>
</div>
<div class="ttlnav">
  <div class="ttl">Attendance Review</div>
  <a href="tchattdview.php">Teacher</a>
  <a href="stdattdview.php">Student</a>
  </div>
  <div id="container"></div>
    <script>
        anychart.onDocumentReady(function () {
          // create data set on our data
          var dataSet = anychart.data.set([
            ['Jan', 22, 90],
            ['Feb', 30, 80],
            ['March', 70, 40],
            ['April', 50, 90],
            ['May', 90, 40]
          ]);
    
          // map data for the first series, take x from the zero column and value from the first column of data set
          var firstSeriesData = dataSet.mapAs({ x: 0, value: 1 });
    
          // map data for the second series, take x from the zero column and value from the second column of data set
          var secondSeriesData = dataSet.mapAs({ x: 0, value: 2 });
    
          // create column chart
          var chart = anychart.column();
    
          // turn on chart animation
          chart.animation(true);
    
          // set chart title text settings
          chart.title('Students attendance rate');
    
          // temp variable to store series instance
          var series;
    
          // helper function to setup label settings for all series
          var setupSeries = function (series, name) {
            series.name(name);
            series.selected().fill('#f48fb1 0.8').stroke('1.5 #c2185b');
          };
    
          // create first series with mapped data
          series = chart.column(firstSeriesData);
          series.xPointPosition(0.45);
          setupSeries(series, ' ');
    
          // create second series with mapped data
          series = chart.column(secondSeriesData);
          series.xPointPosition(0.25);
          setupSeries(series, ' ');
    
          // set chart padding
          //chart.barGroupsPadding(0.1);
    
          // format numbers in y axis label to match browser locale
          chart.yAxis().labels().format('{%Value}{groupsSeparator: }');
    
          // set titles for Y-axis
          //chart.yAxis().title('Percentage rate');
    
          // turn on legend
          //chart.legend().enabled(true).fontSize(13).padding([0, 0, 20, 0]);
    
          chart.interactivity().hoverMode('single');
    
          chart.tooltip().format('{%Value}{groupsSeparator: }');
    
          // set container id for the chart
          chart.container('container');
          // initiate chart drawing
          chart.draw();
        });
    </script>
  <div id="container2"></div>
  <script>
      anychart.onDocumentReady(function () {
        // create data set on our data
        var dataSet = anychart.data.set([
          ['Jan', 22, 90],
          ['Feb', 30, 80],
          ['Mar', 70, 40],
          ['Apr', 50, 90],
          ['May', 90, 40]
        ]);
  
        // map data for the first series, take x from the zero column and value from the first column of data set
        var firstSeriesData = dataSet.mapAs({ x: 0, value: 1 });
  
        // map data for the second series, take x from the zero column and value from the second column of data set
        var secondSeriesData = dataSet.mapAs({ x: 0, value: 2 });
  
        // create column chart
        var chart = anychart.column();
  
        // turn on chart animation
        chart.animation(true);

        // set chart title text settings
        chart.title('Teachers attendance rate');
  
        // temp variable to store series instance
        var series;
  
        // helper function to setup label settings for all series
        var setupSeries = function (series, name) {
          series.name(name);
          series.selected().fill('#f48fb1 0.8').stroke('1.5 #c2185b');
        };
  
        // create first series with mapped data
        series = chart.column(firstSeriesData);
        series.xPointPosition(0.45);
        setupSeries(series, ' ');
  
        // create second series with mapped data
        series = chart.column(secondSeriesData);
        series.xPointPosition(0.25);
        setupSeries(series, ' ');
  
        // set chart padding
        //chart.barGroupsPadding(0.1);
  
        // format numbers in y axis label to match browser locale
        chart.yAxis().labels().format('{%Value}{groupsSeparator: }');
  
        // set titles for Y-axis
        //chart.yAxis().title('Percentage rate');
  
        // turn on legend
        //chart.legend().enabled(true).fontSize(13).padding([0, 0, 20, 0]);
  
        chart.interactivity().hoverMode('single');
  
        chart.tooltip().format('{%Value}{groupsSeparator: }');
  
        // set container id for the chart
        chart.container('container2');
        // initiate chart drawing
        chart.draw();
      });
  </script>

        <footer>
     © 2020 University of Rwanda. All Right Reserved
    </footer>
        </body>
</html>
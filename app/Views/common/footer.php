<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- jQuery UI -->
		<script src="js/jquery-ui.min.js"></script> 
		<!-- jQuery Flot -->
		<script src="js/excanvas.min.js"></script>
		<script src="js/jquery.flot.js"></script>
		<script src="js/jquery.flot.resize.js"></script>
		<script src="js/jquery.flot.pie.js"></script>
		<script src="js/jquery.flot.stack.js"></script>
		<!-- Sparklines -->
		<script src="js/sparklines.js"></script> 
		<!-- jQuery Gritter -->
<!--		<script src="js/jquery.gritter.min.js"></script>-->
		<!-- Respond JS for IE8 -->
		<script src="js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="js/custom.js"></script>
		<script src="js/admission.js"></script>
		
		<!-- Script for this page -->
		<script src="js/sparkline-index.js"></script>


        
    <script src="assets/gui/js/base.js"></script>
    <script src="assets/gui/js/common.js"></script>
    <script src="assets/gui/js/loader.js"></script>
    <script src="assets/gui/js/gui.js"></script>

        <script src="assets/gui/js/chart.min.js" type="text/javascript"></script>
        <link href="assets/js/google-api.js" rel="stylesheet">
    <script type="text/javascript" src="assets/js/gogle-jsapi.js"></script>

<script type="text/javascript">
         google.charts.load('current', {'packages':['corechart']});
         google.charts.setOnLoadCallback(drawChart);

         function drawChart() {
           var data = google.visualization.arrayToDataTable([
             ['Class', 'MCQs'],
              <?php
         
          foreach($class_wise as $rb):
              ?>
            [" <?php echo $rb->class_name?>",<?php echo $rb->count?>],
            <?php
                
          endforeach;
         
         
         ?>
           ]);

           var options = {
           title       : 'Class Wise MCQs',
           curveType   : 'function',
           legend      : { position: 'bottom' },
           colors      : ['#FF7793', 'red', 'black'],
           hAxis       : { minValue: 0, maxValue: 9 },
           pointSize   : 5  

           };

           var chart = new google.visualization.LineChart(document.getElementById('program_wise'));

           chart.draw(data, options);
         }
       </script>

<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
         ["", "",],
         
         <?php
          foreach($class_obj as $ob):
              ?>
            [" <?php echo $ob->class_name?>",<?php echo $ob->count?>],
            <?php     
          endforeach;
         
         ?>
    ]);

    var options = {
        title       : 'Class Wise Objectives',
        hAxis       : {title: 'Class Wise Objectives',  titleTextStyle: {color: '#31c76e'}},
        vAxis       : {title: 'Number Of Questions',  titleTextStyle: {color: '#31c76e'}},
      
        seriesType  : 'bars',
        series      : {
            0       : {
            type    : 'bar',
            color   : '#31c76e'
            },
         
         
      }
    };

    var chart = new google.visualization.ComboChart(document.getElementById('obj_wise'));
    chart.draw(data, options);
  }
    </script>

<script type="text/javascript">
         google.charts.load('current', {'packages':['corechart']});
         google.charts.setOnLoadCallback(drawChart);

         function drawChart() {
           var data = google.visualization.arrayToDataTable([
             ['Class', 'Columns'],
              <?php
         
          foreach($class_column as $cb):
              ?>
            [" <?php echo $cb->class_name?>",<?php echo $cb->count?>],
            <?php
                
          endforeach;
         
         ?>
           ]);

           var options = {
           title       : 'Class Wise Match Columns',
           curveType   : 'function',
           legend      : { position: 'bottom' },
           colors      : ['#FF7793', 'red', 'black'],
           hAxis       : { minValue: 0, maxValue: 9 },
           pointSize   : 5  

           };

           var chart = new google.visualization.LineChart(document.getElementById('column_wise'));

           chart.draw(data, options);
         }
       </script>

<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
         ["", "",],
         
         <?php
          foreach($class_truefalse as $ob):
              ?>
            [" <?php echo $ob->class_name?>",<?php echo $ob->count?>],
            <?php     
          endforeach;
         
         ?>
    ]);

    var options = {
        title       : 'Class Wise True False',
        hAxis       : {title: 'Class Wise True False',  titleTextStyle: {color: '#31c76e'}},
        vAxis       : {title: 'Number Of Questions',  titleTextStyle: {color: '#31c76e'}},
      
        seriesType  : 'bars',
        series      : {
            0       : {
            type    : 'bar',
            color   : '#31c76e'
            },
         
         
      }
    };

    var chart = new google.visualization.ComboChart(document.getElementById('truefalse_wise'));
    chart.draw(data, options);
  }
    </script>

<script type="text/javascript">
         google.charts.load('current', {'packages':['corechart']});
         google.charts.setOnLoadCallback(drawChart);

         function drawChart() {
           var data = google.visualization.arrayToDataTable([
             ['Class', 'Short Questions'],
              <?php
         
          foreach($class_short as $cb):
              ?>
            [" <?php echo $cb->class_name?>",<?php echo $cb->count?>],
            <?php
                
          endforeach;
         
         ?>
           ]);

           var options = {
           title       : 'Class Wise Short Questions',
           curveType   : 'function',
           legend      : { position: 'bottom' },
           colors      : ['#FF7793', 'red', 'black'],
           hAxis       : { minValue: 0, maxValue: 9 },
           pointSize   : 5  

           };

           var chart = new google.visualization.LineChart(document.getElementById('short_wise'));

           chart.draw(data, options);
         }
       </script>

<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
         ["", "",],
         
         <?php
          foreach($class_long as $ob):
              ?>
            [" <?php echo $ob->class_name?>",<?php echo $ob->count?>],
            <?php     
          endforeach;
         
         ?>
    ]);

    var options = {
        title       : 'Class Wise Long Questions',
        hAxis       : {title: 'Class Wise Long Questions',  titleTextStyle: {color: '#31c76e'}},
        vAxis       : {title: 'Number Of Questions',  titleTextStyle: {color: '#31c76e'}},
      
        seriesType  : 'bars',
        series      : {
            0       : {
            type    : 'bar',
            color   : '#31c76e'
            },
         
         
      }
    };

    var chart = new google.visualization.ComboChart(document.getElementById('long_wise'));
    chart.draw(data, options);
  }
    </script>



	</body>

</html>
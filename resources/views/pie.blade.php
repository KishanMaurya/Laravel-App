<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title>Pie Chart Demo (Google VAPI) - https://codeofaninja.com/</title>
    </head>
    
<body style="font-family: Arial;border: 0 none;">
    <!-- where the chart will be rendered -->
    <div id="visualization" style="width: 600px; height: 400px;"></div>
 
    <?php
    $dbName = "laravel_db";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password, $dbName);
    //include database connection
    //include 'connect.php';
 
    //query all records from the database
    $query = "select * from orders where name='kishan'";
 
    //execute the query
    $result = $conn->query( $query );
 
    //get number of rows returned
    $num_results = $result->num_rows;
 
    if( $num_results > 0){
 
    ?>
        <!-- load api -->
        <script type="text/javascript" src="http://www.google.com/jsapi"></script>
        
        <script type="text/javascript">
            //load package
            google.load('visualization', '1', {packages: ['corechart']});
        </script>
 
        <script type="text/javascript">
            function drawVisualization() {
                // Create and populate the data table.
                var data = google.visualization.arrayToDataTable([
                    ['PL', 'Ratings'],
                    <?php
                    while( $row = $result->fetch_assoc() ){
                        extract($row);
                        echo "['{$order_type}', {$quantity}],";
                    }
                    ?>
                ]);
 
                // Create and draw the visualization.
                new google.visualization.PieChart(document.getElementById('visualization')).
                draw(data, {title:"Top Programming Languages for June 2012"});
            }
 
            google.setOnLoadCallback(drawVisualization);
        </script>
    <?php
 
    }else{
        echo "No programming languages found in the database.";
    }
    ?>
    
</body>
</html>
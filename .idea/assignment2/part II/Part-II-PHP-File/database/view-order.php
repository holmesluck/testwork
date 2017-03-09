<?php
  //login information; 
  $host = 'localhost';
  $database = 'assign2';
  $user ='root';
  $passwd = '123456';
?>

<html>
<head>
  <title>Bob¡¯s Auto Parts ¨C Order Queries </title>
</head>
<body>
<h1>Bob¡¯s Auto Parts - All orders</h1>
<h2>All Order in the MySQL database</h2>

<?php

//Connect to the database
  $conn = new mysqli($host, $user, $passwd, $database);
  
  if( $conn->connect_error)
    die($conn->connect_error);
  else
    echo '<p> Successfully connect to the database. </p>';

  // Select data from the table
  $query = "SELECT * FROM assign2";
  $result = $conn->query($query);
  
  if(!$result) 
    echo "<p>SELECT failed: $query </p>";
  else
    echo "<p>Successfully select. </p>"; 
    
  // Display the data 
  $num_rows = $result->num_rows;
  
  for ( $j=0; $j < $num_rows; ++$j){
    $result->data_seek ($j);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    
    echo '<p> Row' . $j . ':' . 'id='. $row['id']  
                   .'; tireqty=' . $row['tireqty']  
                   .'; oilqty=' . $row['oilqty']
                   .'; sparkdqty=' . $row['sparkqty']
                   .'; totalamount=' . $row['totalamount'] 
                   .'; method:' . $row['method']
                   . '; Date:time=' . $row['DateTime'] . '</p>';
  }
  
   
?>
</body>
</html>

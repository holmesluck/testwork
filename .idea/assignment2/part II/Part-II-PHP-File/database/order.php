<?php
  // create short variable names
  $tireqty = $_POST['tireqty'];
  $oilqty = $_POST['oilqty'];
  $sparkqty = $_POST['sparkqty'];
  $find = $_POST['find'];
   //login information; 
  $host = 'localhost';
  $database = 'assign2';
  $user ='root';
  $passwd = '123456';
?>

<html>
<head>
  <title>Bob¡¯s Auto Parts ¨C Order Results</title>
</head>
<body>
<h1>Bob¡¯s Auto Parts</h1>
<h2>Order Results</h2>

<?php
date_default_timezone_set('Asia/Hong_Kong');
$date = date('H:i, jS F');

print '<p>Order processed at ';
echo $date;
echo '</p>';

echo '<p>Your order is as follows: </p>';

$totalqty = 0;
$totalqty = $tireqty + $oilqty + $sparkqty;
echo 'Items ordered: '.$totalqty.'<br />';

if( $totalqty == 0)
{
  echo 'Nothing ordered.<br />';
}
else
{
  if ( $tireqty>0 )
	echo $tireqty.' Tires<br />';
  if ( $oilqty>0 )
	echo $oilqty.' Bottles of oil<br />';
  if ( $sparkqty>0 )
	echo $sparkqty.' Spark plugs<br />';
}

$totalamount = 0.00;

define('TIREPRICE', 100);
define('OILPRICE', 123.5);
define('SPARKPRICE', 32.35);

$totalamount = $tireqty * TIREPRICE
             + $oilqty * OILPRICE
             + $sparkqty * SPARKPRICE;


$tireqty = $tireqty + 0;
$oilqty =  $oilqty + 0;
$sparkqty = $sparkqty + 0;

echo '<p>Total of order is '.$totalamount.'</p>';

if($find == 'a')
  $method="Regular customer";
elseif($find == 'b')
  $method="TV advertising";
elseif($find == 'c')
  $method="Phone directory";
elseif($find == 'd')
  $method="word of mouth";

//Connect to the database
  $conn = new mysqli($host, $user, $passwd, $database);
  
  if( $conn->connect_error)
    die($conn->connect_error);
  else
    echo '<p> Successfully connect to the database. </p>';

  // Insert data into the table  
  $query = "INSERT INTO assign2 (tireqty, oilqty, sparkqty, totalamount, method, DateTime) VALUES".
           "('"  . $tireqty . "','" .$oilqty. "','" .$sparkqty. "','" .$totalamount. "','" .$method. "', NOW())";

  $result = $conn->query($query);
  
  if(!$result) {
    echo '<p><strong> Your order could not be processed at this time.  '
       .'Please try again later.</strong></p></body></html>';
    exit;
  }else{
    echo '<p>Order has been saved.</p>';
  }

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

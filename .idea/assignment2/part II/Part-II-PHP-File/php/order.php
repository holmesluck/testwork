<?php
  // create short variable names
  $tireqty = $_POST['tireqty'];
  $oilqty = $_POST['oilqty'];
  $sparkqty = $_POST['sparkqty'];
  $find = $_POST['find'];
?>

<html>
<head>
  <title>Bob's Auto Parts Order Results</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
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


echo '<p>Total of order is '.$totalamount.'</p>';

if($find == 'a')
  $method="Regular customer";
elseif($find == 'b')
  $method="TV advertising";
elseif($find == 'c')
  $method="Phone directory";
elseif($find == 'd')
  $method="word of mouth";



$outputstring = $date."\t".$tireqty." Tires \t".$oilqty." Oil\t"
                  .$sparkqty." Spark plugs\t\$".$totalamount
                  ."\t". $method."\n";

// open file for appending
 $fp = @fopen("../new_order.txt", "ab");

if (!$fp)
{
  echo '<p><strong> Your order could not be processed at this time.  '
       .'Please try again later.</strong></p></body></html>';
  exit;
} 

fwrite($fp, $outputstring, strlen($outputstring)); 
fclose($fp);

echo '<p>Order has been saved.</p>'; 
?>
</body>
</html>

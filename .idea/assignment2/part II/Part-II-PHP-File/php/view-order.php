<?php
//create short variable name

$orders= file("../new_order.txt");

$number_of_orders = count($orders);

if ($number_of_orders == 0)
{
  echo '<p><strong>No orders pending. 
       Please try again later.</strong></p>';
}

for ($i=0; $i<$number_of_orders; $i++)
{
  echo $orders[$i]. '<br />';
}

?>

<?php
var_dump($_POST);

$fname = $_POST['fname'];
$checkbox = $_POST['flavor'];
$size = sizeof($checkbox);

$flavor = implode(", ", $_POST['flavor']);

echo "thank you $fname for your order";
echo "Order summary";
echo $flavor;
echo "Order total";
echo "$".$size * 3.50;

?>

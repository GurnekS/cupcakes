<!--Gurnek & Daniel pair programming-->
<?php
$fname = $_POST['fname'];


$flavor = implode(", ", $_POST['flavor']);
$isValid = true;

if(isset($_POST['flavor'])){
    $checkbox = $_POST['flavor'];
    $size = sizeof($checkbox);
    $total = $size * 3.50;

    }

else{
    $isValid = false;
 echo "Please check a flavor ";
}


if($fname == ""){
    $isValid = false;
    echo "Please enter a Name.";
}


if($isValid == true) {
    echo "thank you $fname for your order!";

?>
    <h3>Order summary</h3>
    <li><?php echo $flavor  ?></li>

<?php
echo " Order total ";
echo " $ ".$size * 3.50;
}


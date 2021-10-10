<?php
   include('../config.php');
$picname = strtotime(date('Y-m-d H:i')).'_'.$_FILES['picture']['name'];
$sql="INSERT INTO product (itemname, category, price, picture) 
VALUES ('$_POST[itemname]', '$_POST[category]',  '$_POST[price]', '$picname')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  if(!empty($_FILES['picture']['tmp_name'])){
  	move_uploaded_file($_FILES['picture']['tmp_name'], '../admin/items/'.$picname);
  }
  header("location: items.php");

 mysqli_close($con);
?> 
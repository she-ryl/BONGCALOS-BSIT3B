<?php
include '../config.php';

?>
<?php 

if (isset($_POST['submit'])){
$ID=$_POST['ID'];

$itemname=$_POST['itemname'];
$category =$_POST['category'];
$price   =$_POST['price'];
$picture =$_FILES['picture']['name'];
$picname = strtotime(date('Y-m-d H:i')).'_'.$picture;


$query="update product  set itemname ='$itemname', category ='$category', price='$price'  , picture='$picname'  where ID =$ID ";
$rows=mysqli_query($con,$query);
echo "succes full updated ".$rows;
 if(!empty($_FILES['picture']['tmp_name'])){
  	move_uploaded_file($_FILES['picture']['tmp_name'], '../admin/items/'.$picname);
  }
mysqli_close($con);

header("location: items.php");
exit();
}

?>


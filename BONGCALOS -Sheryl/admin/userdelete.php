<?php
include '../config.php' ?>

<?php
$delete=$_GET['delete'];
if(empty($delete)){

}else{
$query="delete from users where id=".$delete."";
$result=mysqli_query($con,$query);
header("location:users.php?msg= Deleted !!");
exit();
mysqli_close($con);
}
?>

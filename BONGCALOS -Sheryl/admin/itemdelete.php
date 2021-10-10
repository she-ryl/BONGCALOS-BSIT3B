<?php include("../config.php");?>
<?php
$delete=$_GET['delete'];
if(empty($delete)){
echo "you don't select any record";

}else{
$query="delete from product where ID=".$delete."";
$result=mysqli_query($con,$query);
header("location: items.php");
exit();
mysqli_close($con);
}
?>


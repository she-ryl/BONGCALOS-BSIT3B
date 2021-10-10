<?php
include '../config.php';

?>

<?php 

if (isset($_POST['submit'])){

echo $name=$_POST['name'];
echo  $email=$_POST['email'];
echo $username=$_POST['username'];
echo  $password=$_POST['password'];
echo $role=$_POST['role'];
$id=$_POST['id'];

echo $query="update users  set name ='$name', email='$email',username='$username',password='$password',role='$role'where id=$id";
$rows=mysqli_query($con,$query);
echo "succes full updated ".$rows;
mysqli_close($con);
header("location: users.php");
exit();
}

?>


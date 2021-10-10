<?php
include_once '../config.php';
 
     $sql = "INSERT INTO users (name,email,username,password,role)
     VALUES ('$_POST[name]', '$_POST[email]', '$_POST[username]', '$_POST[password]', '$_POST[role]')";
 
     if (mysqli_query($con, $sql)) {
        header("location: users.php");
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
     }
     mysqli_close($con);
 
?>

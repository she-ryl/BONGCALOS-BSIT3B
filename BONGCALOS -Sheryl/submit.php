<?php
include_once 'config.php';
 
     $sql = "INSERT INTO users (name,email,username,password,role)
     VALUES ('$_POST[name]', '$_POST[email]', '$_POST[username]', '$_POST[password]', 'User')";
 
     if (mysqli_query($con, $sql)) {
        header("location: login.php");
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
     }
     mysqli_close($con);
 
?>

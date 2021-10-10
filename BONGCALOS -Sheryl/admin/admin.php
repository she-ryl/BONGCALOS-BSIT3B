<!DOCTYPE html>
<html>
<head>
  <title>SHE || Admin</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">

</head>
<body>
          <?php 
    session_start();

    if($_SESSION['role']==""){
        header("location:login.php?message=fail");
    }
 
    ?>
    <nav class="navMenu">

      <a href="admin.php">Home</a>
      <a href="items.php">Items</a>
      <a href="users.php">Users</a>
      <a href="../logout.php">Logout</a>
      <div class="dot"></div>
    </nav>
</html>
</body>
</html>
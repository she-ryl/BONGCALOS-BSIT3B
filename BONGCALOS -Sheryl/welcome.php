    <?php
include 'config.php';//include settings ?>
    <?php 
    session_start();

    if($_SESSION['role']==""){
        header("location:login.php?message=fail");
    }
 
    ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        html {
  box-sizing: border-box;
}

*,
*:before,
*:after {
  box-sizing: inherit;
}

body {
  font-family: system-ui, -apple-system, BlinkMacSystemFont, "Avenir Next", "Avenir", "Segoe UI", "Lucida Grande", "Helvetica Neue", "Helvetica", "Fira Sans", "Roboto", "Noto", "Droid Sans", "Cantarell", "Oxygen", "Ubuntu", "Franklin Gothic Medium", "Century Gothic", "Liberation Sans", sans-serif;
  color: rgba(0, 0, 0, 0.87);
}

a {
  color: #26890d;
}
a:hover, a:focus {
  color: #046a38;
}

.container {
  margin: 5% 3%;
}
@media (min-width: 48em) {
  .container {
    margin: 2%;
  }
}
@media (min-width: 75em) {
  .container {
    margin: 2em auto;
    max-width: 75em;
  }
}

.responsive-table {
  width: 100%;
  margin-bottom: 1.5em;
  border-spacing: 0;
}
@media (min-width: 48em) {
  .responsive-table {
    font-size: 0.9em;
  }
}
@media (min-width: 62em) {
  .responsive-table {
    font-size: 1em;
  }
}
.responsive-table thead {
  position: absolute;
  clip: rect(1px 1px 1px 1px);
  /* IE6, IE7 */
  padding: 0;
  border: 0;
  height: 1px;
  width: 1px;
  overflow: hidden;
}
@media (min-width: 48em) {
  .responsive-table thead {
    position: relative;
    clip: auto;
    height: auto;
    width: auto;
    overflow: auto;
  }
}
.responsive-table thead th {
  background-color: blue;
  border: 1px solid #86bc25;
  font-weight: normal;
  text-align: center;
  color: white;
}
.responsive-table thead th:first-of-type {
  text-align: left;
}
.responsive-table tbody,
.responsive-table tr,
.responsive-table th,
.responsive-table td {
  display: block;
  padding: 0;
  text-align: left;
  white-space: normal;
}
@media (min-width: 48em) {
  .responsive-table tr {
    display: table-row;
  }
}
.responsive-table th,
.responsive-table td {
  padding: 0.5em;
  vertical-align: middle;
}
@media (min-width: 30em) {
  .responsive-table th,
.responsive-table td {
    padding: 0.75em 0.5em;
  }
}
@media (min-width: 48em) {
  .responsive-table th,
.responsive-table td {
    display: table-cell;
    padding: 0.5em;
  }
}
@media (min-width: 62em) {
  .responsive-table th,
.responsive-table td {
    padding: 0.75em 0.5em;
  }
}
@media (min-width: 75em) {
  .responsive-table th,
.responsive-table td {
    padding: 0.75em;
  }
}
.responsive-table caption {
  margin-bottom: 1em;
  font-size: 1em;
  font-weight: bold;
  text-align: center;
}
@media (min-width: 48em) {
  .responsive-table caption {
    font-size: 1.5em;
  }
}
.responsive-table tfoot {
  font-size: 0.8em;
  font-style: italic;
}
@media (min-width: 62em) {
  .responsive-table tfoot {
    font-size: 0.9em;
  }
}
@media (min-width: 48em) {
  .responsive-table tbody {
    display: table-row-group;
  }
}
.responsive-table tbody tr {
  margin-bottom: 1em;
}
@media (min-width: 48em) {
  .responsive-table tbody tr {
    display: table-row;
    border-width: 1px;
  }
}
.responsive-table tbody tr:last-of-type {
  margin-bottom: 0;
}
@media (min-width: 48em) {
  .responsive-table tbody tr:nth-of-type(even) {
    background-color: rgba(0, 0, 0, 0.3);
  }
}
.responsive-table tbody th[scope=row] {
  background-color: blue;
  color: white;
}
@media (min-width: 30em) {
  .responsive-table tbody th[scope=row] {
    border-left: 1px solid #86bc25;
    border-bottom: 1px solid #86bc25;
  }
}
@media (min-width: 48em) {
  .responsive-table tbody th[scope=row] {
    background-color: transparent;
    color: #000001;
    text-align: left;
  }
}
.responsive-table tbody td {
  text-align: right;
}
@media (min-width: 48em) {
  .responsive-table tbody td {
    border-left: 1px solid #86bc25;
    border-bottom: 1px solid #86bc25;
    text-align: center;
  }
}
@media (min-width: 48em) {
  .responsive-table tbody td:last-of-type {
    border-right: 1px solid #86bc25;
  }
}
.responsive-table tbody td[data-type=currency] {
  text-align: right;
}
.responsive-table tbody td[data-title]:before {
  content: attr(data-title);
  float: left;
  font-size: 0.8em;
  color: rgba(0, 0, 0, 0.54);
}
@media (min-width: 30em) {
  .responsive-table tbody td[data-title]:before {
    font-size: 0.9em;
  }
}
@media (min-width: 48em) {
  .responsive-table tbody td[data-title]:before {
    content: none;
  }
}
</style>
</head>
<body>

    <h1 class="my-5" align="center" >Hi,<b><?php echo $_SESSION['username']; ?></b> Welcome to SHE site.</h1>
    <p align="center">
        <a href="logout.php" class="btn btn-danger ml-3" >Sign Out of Your Account</a>
    </p>

    <div class="container">
  <table class="responsive-table">
    <h2>Item List</h2>

<?php
$result = mysqli_query($con,"SELECT * FROM product");
?>
    <thead>
      <tr>
        <th scope="col">Item Name</th>
        <th scope="col">Price</th>
        <th scope="col">Category</th>
        <th scope="col">Picture</th>
      </tr>
    </thead>
    <tbody>
            <?php while($row = mysqli_fetch_array($result))
  {?>
      <tr>
        <th scope="row"><?Php echo $row['itemname']; ?></th>
        <td data-title="Released"><?Php echo $row['category']; ?></td>
        <td data-title="Studio"><?Php echo $row['price']; ?></td>
        <td data-title="Worldwide Gross" data-type="currency"><img src="admin/items/<?php echo $row['picture']; ?> " width="70" height="70"   ></td>
      </tr>
    </tbody>

  <?php }mysqli_close($con);?>
  </table>
</div>
</body>
</html>
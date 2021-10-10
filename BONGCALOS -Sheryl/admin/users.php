<?php
include '../config.php'//include settings ?>


<!DOCTYPE html>
<html>
<head>
  <title>User || SHE</title>
  <link rel="stylesheet" type="text/css" href="page.css">
</head>
<style type="text/css">
  body {
    background: #191828;
    color: #efedef;
    font-family: "Roboto", Arial, Helvetica, sans-serif;
    font-size: 16px;
    font-weight: 300;
    letter-spacing: 0.01em;
    line-height: 1.6em;
    margin: 0;
    padding: 100px;

}
h1 {
    font-size: 40px;
    line-height: 0.8em;
    color: rgba(255, 255, 255, 0.2);
}

button:focus,
input:focus,
textarea:focus,
select:focus {
    outline: none;
}

.tabs {
    display: block;
    display: -webkit-flex;
    display: -moz-flex;
    display: flex;
    -webkit-flex-wrap: wrap;
    -moz-flex-wrap: wrap;
    flex-wrap: wrap;
    margin: 0;
    overflow: hidden;
}
.tabs [class^="tab"] label,
.tabs [class*=" tab"] label {
    color: #efedef;
    cursor: pointer;
    display: block;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1em;
    padding: 2rem 0;
    text-align: center;
}
.tabs [class^="tab"] [type="radio"],
.tabs [class*=" tab"] [type="radio"] {
    border-bottom: 1px solid rgba(239, 237, 239, 0.5);
    cursor: pointer;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    display: block;
    width: 100%;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
.tabs [class^="tab"] [type="radio"]:hover,
.tabs [class^="tab"] [type="radio"]:focus,
.tabs [class*=" tab"] [type="radio"]:hover,
.tabs [class*=" tab"] [type="radio"]:focus {
    border-bottom: 1px solid #fd264f;
}
.tabs [class^="tab"] [type="radio"]:checked,
.tabs [class*=" tab"] [type="radio"]:checked {
    border-bottom: 2px solid #fd264f;
}
.tabs [class^="tab"] [type="radio"]:checked + div,
.tabs [class*=" tab"] [type="radio"]:checked + div {
    opacity: 1;
}
.tabs [class^="tab"] [type="radio"] + div,
.tabs [class*=" tab"] [type="radio"] + div {
    display: block;
    opacity: 0;
    padding: 2rem 0;
    width: 90%;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
.tabs .tab-2 {
    width: 50%;
}
.tabs .tab-2 [type="radio"] + div {
    width: 200%;
    margin-left: 200%;
}
.tabs .tab-2 [type="radio"]:checked + div {
    margin-left: 0;
}
.tabs .tab-2:last-child [type="radio"] + div {
    margin-left: 100%;
}
.tabs .tab-2:last-child [type="radio"]:checked + div {
    margin-left: -100%;
}.form__group {
  position: relative;
  padding: 15px 0 0;
  margin-top: 10px;
  width: 50%;
}

.form__field {
  font-family: inherit;
  width: 100%;
  border: 0;
  border-bottom: 2px solid #9b9b9b;
  outline: 0;
  font-size: 1.3rem;
  color: #fff;
  padding: 7px 0;
  background: transparent;
  transition: border-color 0.2s;
}
.form__field::placeholder {
  color: white;

}
.form__field:placeholder-shown ~ .form__label {
  font-size: 1.3rem;
  cursor: text;
  top: 20px;

}

.form__label {
  position: absolute;
  top: 0;
  display: block;
  transition: 0.2s;
  font-size: 1rem;
  color: #9b9b9b;
}

.form__field:focus {
  padding-bottom: 6px;
  font-weight: 700;
  border-width: 3px;
  border-image: linear-gradient(to right, #11998e, #38ef7d);
  border-image-slice: 1;
}
.form__field:focus ~ .form__label {
  position: absolute;
  top: 0;
  display: block;
  transition: 0.2s;
  font-size: 1rem;
  color: #11998e;
  font-weight: 700;
}

/* reset input */
.form__field:required, .form__field:invalid {
  box-shadow: none;
}

form{

  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  font-size: 1.5rem;
  background-color: #222222;
}
select > option{
  color: black;
}
button {
  font-size: 20px;
  background: white;
  color: black;
  border: 0.3rem solid black;
  padding: 0.10em 0.8em;
  margin: 1rem;
  position: relative;
  z-index: 1;
  overflow: hidden;
  width: 100%;

}
button:hover {
  color: black;
}
button::after {
  content: "";
  background: #ecf0f1;
  position: absolute;
  z-index: -1;
  padding: 0.85em 0.75em;
  display: block;
}

a{
  text-decoration: none;
}
</style>
<body>


<h1>
   Users
</h1>

<div class="tabs">
  <div class="tab-2">
    <label for="tab2-1">Add User</label>
    <input id="tab2-1" name="tabs-two" type="radio" checked="checked">
    <div>

      <p>
        <form action="insertuser.php" method="POST">
        <h4>Create User</h4>

        <div class="form__group field">
        <input type="text" class="form__field" placeholder="Name" name="name" id='name' required />
        </div>

        <div class="form__group field">
        <input type="email" class="form__field" placeholder="Email" name="email" id='email' required />
        </div>  

        <div class="form__group field">
        <input type="text" class="form__field" placeholder="Username" name="username" id='username' required />
        </div>
        <div class="form__group field">

        <input type="password" class="form__field" placeholder="Password" name="password" id='password' required />
        </div>        
        <div class="form__group field">
        <select name="role" class="form__field">
          <option hidden="">Role</option>
          <option value="Admin">Admin</option>
          <option value="User">User</option>
        </select>
        </div> 
        <div class="form__group field">
           <button class="grow_skew_forward" type="submit" name="submit">Submit</button>
        </div> 
        <div class="form__group field">
          <a href="admin.php" class="form__field">Back to Home</a>
          <br>
        </div>
        <br><br>         
        </form>
      </p>
    </div>
  </div>
  <div class="tab-2">
    <label for="tab2-2">User List</label>

<?php
$result = mysqli_query($con,"SELECT * FROM users");
?>
    <input id="tab2-2" name="tabs-two" type="radio">
    <div>
      <h4>User List</h4>

<table class="container">
  <thead>
    <tr>
      <th><h1>ID</h1></th>
      <th><h1>Fullname</h1></th>
      <th><h1>Email</h1></th>
      <th><h1>Username</h1></th>
      <th><h1>Password</h1></th>
      <th><h1>Role</h1></th>
      <th><h1>Edit</h1></th>
      <th><h1>Delete</h1></th>

    </tr>
  </thead>
  <tbody>
    <?php while($row = mysqli_fetch_array($result))
  {?>
    <tr>
      <td><?Php echo $row['id']; ?></td>
      <td><?Php echo $row['name']; ?></td>
      <td><?Php echo $row['email']; ?></td>
      <td><?Php echo $row['username']; ?></td>
      <td><?Php echo $row['password']; ?></td>
      <td><?Php echo $row['role']; ?></td>
      <td><a href="updateuser.php?update=<?php echo $row['id']; ?>"  onClick="edit(this);" title="Edit" >Edit</a></td>
      <td><a href="userdelete.php?delete=<?php echo $row['id']; ?>"  onClick="delete(this);" title="delete" >Delete</a></td>
    </tr>
  </tbody>

  <?php }mysqli_close($con);?>
</table></p>
    </div>
  </div>
</div>
</body>
</html>
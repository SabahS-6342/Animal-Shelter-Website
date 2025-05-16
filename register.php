<?php

    if(isset($_POST["user"]) && isset($_POST["pass"])) {
      include("dbconnect.php");
      $name = mysqli_real_escape_string($db,$_POST["name"]);
      $email = mysqli_real_escape_string($db,$_POST["email"]);
      $user = mysqli_real_escape_string($db,$_POST["user"]);
      $pass = mysqli_real_escape_string($db,$_POST["pass"]);

      $query = "INSERT INTO users (name,email,username,password) VALUES ('$name', '$email', '$user', '$pass')";
      mysqli_query($db, $query) or die(mysqli_error($db));
      echo "Registration for $user was successful <br /><br />";

      $query = "SELECT max(id) FROM users";
      $result = mysqli_query($db,$query);
      $row = mysqli_fetch_assoc($result);
      $uid = $row['max(id)'];

    }
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
  <body>
    <form name="register" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-date">
      <table >
        <tr>
          <th>Name</th>
          <td><input type="text" name="name" required></td>
        </tr>
        <tr>
          <th>Email</th>
          <td><input type="email" name="email" required></td>
        </tr>
        <tr>
          <th>Username</th>
          <td><input type="text" name="user" required></td>
        </tr>
        <tr>
          <th>Password</th>
          <td><input type="password" name="pass" required></td>
        </tr>
        <tr>
          <th>Confirm Password</th>
          <td><input type="password" name="cpass" required></td>
        </tr>
      </table>
      <input type="submit" value="Register" align-items="center">
      <hr>
      <p>Already a user? <a href="login.php">Log in</a></p>
    </form>
  </body>
</html>

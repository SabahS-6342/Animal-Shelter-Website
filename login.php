<?php

    session_start();

    if (isset($_POST["user"]) && isset($_POST["pass"])) {

      include("dbconnect.php");

      $user = mysqli_real_escape_string($db, $_POST["user"]);
      $pass = mysqli_real_escape_string($db, $_POST["pass"]);

      $query = "SELECT PASSWORD from users WHERE USERNAME = '" . $user . "'";
      $result = mysqli_query($db, $query) or die(mysqli_error($db));
      $row = mysqli_fetch_assoc($result);

      if ($pass == $row["PASSWORD"]) {
        $_SESSION["username"] = $user;
      }

      else {
        echo "Invalid username or password <br />";
      }
    }

    if (isset($_GET['logout']) && $_GET['logout'] == 1) {
      session_destroy();
      header("Location: " . $_SERVER['PHP_SELF']);
    }

    if(isset($_SESSION["username"])) {
      echo "Welcome ". $_SESSION["username"];
      echo "<br/><a href='" . $_SERVER['PHP_SELF'] . "?logout=1'>Logout</a>";
      echo "<br/><a href='index.php'>Go back</a>";
    }

    else {
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
  </head>
  <body>
    <form name="register" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      <table>
        <tr>
          <th>Username</th>
          <td><input type="text" name="user" required></td>
        </tr>
        <tr>
          <th>Password</th>
          <td><input type="password" name="pass" required></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="submit" value="Login">
          </td>
        </tr>
      </table>
      <hr>
      <p>New to our page? <a href="register.php">Register</a></p>
    </form>
  </body>
</html>

<?php  }  ?>

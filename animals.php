<?php

    include("dbconnect.php");
    if(isset($_GET['cid'])) {
      $result = mysqli_query($db, "SELECT * FROM animals WHERE catid = " . $_GET['cid']);
?>

<table >

    <?php

        while ($row = mysqli_fetch_assoc($result)) {
          $aid = $row['id'];
          $aname = $row['name'];
          $age = $row['age'];

          echo "<tr><td><a href='animal-details.php?aid=$aid'>".$aname."</a></td></tr>";
        }
    ?>
</table>

<?php

    }else {
      header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
  

  </head>
  <body>
    <div class="co">

    </div>
  </body>
</html>

<?php

    include("dbconnect.php");
    if(isset($_GET['aid'])) {
      $result = mysqli_query($db, "SELECT * FROM animals WHERE id=".$_GET['aid']);
?>

<table>

    <?php

        while ($row = mysqli_fetch_assoc($result)) {
          $aid = $row['id'];
          $aname = $row['name'];
          $age = $row['age'];
          $color = $row['color'];
          $desc = $row['description'];

          echo "
              <tr>
                  <th>Name: </th>
                  <td>".$aname."</td>
              </tr>
              <tr>
                  <th>Age: </th>
                  <td>".$age."</td>
              </tr>
              <tr>
                  <th>Color: </th>
                  <td>".$color."</td>
              </tr>
              <tr>
                  <th>Description: </th>
                  <td>".$desc."</td>
              </tr>
          ";
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
      <a href="mailto:sabah6342sinno@gmail.com?subject=I20%would20%like20%to20%adopt20%an%animal">Adopt</a>

    </div>
  </body>
</html>

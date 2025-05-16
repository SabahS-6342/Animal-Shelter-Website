<?php

  include("dbconnect.php");

  $result = mysqli_query($db, "SELECT * FROM category");
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>The Animal Shelter</title>
  <link rel="shortcut icon" href="logo.png" type="image/x-icon" />
  <link rel="stylesheet" href="style.css">

</head>
  <body>
    <div id="all">

      <div id="header">
             <?php include 'header.php'; ?>
      </div>
      <h1>Why Adoption?</h1>
      <p>About 6.5 million animals enter U.S. shelters every year, according to the ASPCA1. These include strays, owner surrenders, and breeder animals deemed unfit for sale. Overwhelming, these are sweet, loving animals who simply ended up in unfortunate situations. And for approximately 1.5 million of them, their journeys will end in euthanasia. That’s where you come in.
        <br>Adopting an animal from a shelter or other type of rescue organization not only saves that one animal’s life, but it also saves the life of another animal who can now take the empty spot you’ve opened up. It’s a double good deed and a second chance for two animals who might otherwise not have gotten one.</p>
      <div id="adopt">
        <br>
        <br>
        <h1>Which animal are you interested in adopting?</h1>
        <div class="list">
          <?php
            while ($row = mysqli_fetch_assoc($result)) {
              $cid = $row['id'];
              $cname = $row['name'];
              echo "<ul><li><a href='animals.php?cid=$cid'>".$cname."</a></li></ul>";
            }
          ?>
          </div>
        <div class="cat">
          <br>
          <br>
          <table>
            <header>
              <h1>Our Cats:</h1>
            </header>
            <tr>
              <td><img src="103.jpg" alt="" width="100%"></td>
              <td><img src="58.jpg" alt="" width="100%"></td>
              <td><img src="27.jpg" alt="" width="100%"></td>
            </tr>
            <tr>
              <th>Mimi</th>
              <th>Smokey</th>
              <th>Goldie</th>
            </tr>
          </table>
        </div>
<br>
<br>
        <div class="dog">
          <table>
            <header>
              <h1>Our Dogs:</h1>
            </header>
            <tr>
              <td><img src="bobby.jpg" alt="" width="100%"></td>
              <td><img src="94.jpg" alt="" width="100%"></td>
              <td><img src="106.jpg" alt="" width="100%"></td>
            </tr>
            <tr>
              <th>Bobby</th>
              <th>Fox</th>
              <th>Marino</th>
            </tr>
          </table>
        </div>
<br>
<br>
      </div>
      <div id="donate">
        <h1><a href="donate.php">Donate here</a></h1>
      </div>
      <div id="about">
             <?php include 'footer.php'; ?>
      </div>
    </div>

  </body>
</html>

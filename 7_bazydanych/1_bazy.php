<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Użytkownicy</title>
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
    $connect = new mysqli("localhost", "root", "", "zsk_4bg1_baza1");
    $sql = "SELECT * FROM `users`;";
    $result = $connect->query($sql);
    //echo $row['name'];
    //print_r ($row);
    while ($row = $result->fetch_assoc()) {
      echo <<< Row
      $row[id]
      <br>
      $row[name]
      <br>
      $row[surname]
      <br>
      $row[birthday]
      <br> <hr>
Row;
    }
    $connect->close();
    ?>
  </body>
</html>

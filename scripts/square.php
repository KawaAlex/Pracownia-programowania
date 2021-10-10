<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>kwadrat</title>
  </head>
  <body>
    <h3>kwadrat</h3>
    <form method="get">
      <input type="text" name="sideA" placeholder="Podaj długość boku a"><br><br>
      <input type="submit" value="oblicz">
    </form>
    <?php
    //
    if (!empty($_GET['sideA'])) {
      $sideA=$_GET['sideA'];
      //pole
      $area=$sideA**2;
      //obwód
      $circuit=4*$sideA;
      echo <<< RESULT
      Pole kwadratu wynosi $area cm<sup>2</sup><br>
      Obwód kwadratu wynosi $circuit cm
      RESULT;





      //echo "pole równe " .$_GET['sideA']**2 . "cm^2";
      //echo "<br>";
      //echo "obwód wynosi " .$_GET['sideA']*4 . "cm";
    }elseif (isset($_GET['button'])) {
      // code...
    } {
      echo "Wypełnij wszystkie pola";
    }

     ?>
  </body>
</html>

<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prostokąt</title>
  </head>
  <body>
    <h3>Prostokąt</h3>
    <form method="get">
      <input type="text" name="sideA" placeholder="Podaj długość boku a"><br><br>
      <input type="text" name="sideB" placeholder="Podaj długość boku b"><br><br>
      <input type="submit" name="button" value="oblicz">
    </form>
    <?php

    if (!empty($_GET['sideA']) && !empty($_GET['sideB'])) {
      $sideA=$_GET['sideA'];
      $sideB=$_GET['sideB'];
      //pole
      $area=$sideA*$sideB;
      //obwód
      $circuit=2*$sideA+2*$sideB;
      echo <<< RESULT
      Pole prostokąta wynosi $area cm<sup>2</sup><br>
      Obwód prostokąta wynosi $circuit cm
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

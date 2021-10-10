<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane użytkownika</title>
  </head>
  <body>
    <h3> Dane użytkownika </h3>
    <form method="POST"> <!-- jest get i post get wyświetla się w pasku adresu strony, a post nie !-->
      <input type="text" name="name" placeholder="Podaj imię"><br>
      <input type="text" name="surname" placeholder="Podaj nazwisko"><br>
      <input type="submit" value="Zatwierdź">
    </form>
    <?php
    //if (isset($_GET['name']) && isset($_GET['surname']))
    //if (!empty($_POST['name'] && $_POST['surname']))  {
    if (!empty($_POST['name']) && !empty($_POST['surname'])) {
      //echo $_GET['name'];
      echo <<< L
      Imię: {$_POST['name']}<br>
      Nazwisko: $_POST[surname]<br>
  L;
      }else{
        echo "Wypełnij wszystkie dane :)";  //wykorzystać funkcję empty
        }

     ?>
  </body>
</html>

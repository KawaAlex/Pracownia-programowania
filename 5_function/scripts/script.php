<?php
require_once '../functions/function.php';
show();
if (!empty($_POST['name'])) {
echo "Imie: ".stringValidate($_POST['name']).", długość ".strlen(stringValidate($_POST['name']));
}

 ?>

<?php
function show(){
    echo "SHOW<br>";
}
function show1($name){
  return $name;
}
function stringValidate($name, $len){
  return substr(strtolower(trim($name))), 0, $len;
}
 ?>

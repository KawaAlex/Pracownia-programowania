<?php
echo PHP_VERSION; //8.0.10
echo 2**10,"<br>"; //1024 dwie gwiazdki to potęgowanie

$x=1;
$y=10;
echo $x<=>$y; //operator porównania zwraca -1 jeżeli liczba po lewej jest mniejsza 0 jezeli równe 1 jezeli prawa wieksza

//równe
$x=1;
$y=1.0;

echo gettype($x); //integer
echo gettype($y); //double

if ($x==$y) {
  echo "Równe";
}else {
  echo "Różne";
}

//identyczne
if ($x===$y) {
  echo "Identyczne";
}else {
  echo "Różne";
}
/*
  postinkrementacja $x++
  preinkrementacja ++$x
  postdekrementacja $x--
  predekrementacja --$x
*/


echo "<hr>";
$x=10;
$x++;
echo $x; //11
$x = $x++;
echo $x; //11
$y = $x++;
echo $x; //12
echo $y; //11
$x=--$x;
echo $x; //11

//Zadanie
//1
//1
//2
//3
//3
//4
//3
 ?>

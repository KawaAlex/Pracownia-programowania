<?php
//date()
echo "dzień-meisiąć-rok: ".date('d-m-Y').'<br>'; //21-10-2021
echo "miesiąc-dzień-rok: ".date('m-d-Y').'<br>'; //21-10-2021
echo date('D-M-Y').'<br>';


setlocale(LC_ALL, 'polish');
echo strftime('%d %B %Y'), '<br>';
echo date ('G:i:s'),'<br>'; //8:14:57
echo date ('G:i:sa'),'<br>'; //8:15:15am
echo date ('H:i:s'),'<br>';
 ?>
<script>
setTimeout(function(){
  window.location.reload();
},1000)

</script>
<?php

//getdate()
$date=getdate();
//echo $date //Warning
echo "<pre>";
print_r($date);
echo "</pre>";

echo $date['wday'],'<br>'; //4
echo $date['yday'],'<br>'; //293
//rok przestepny
echo date ('L'), '<br>'; // 0-rok nie jest przestepny

//mktime()
//$today= mktime(0,0,0,10,21,2021);
$today= mktime(0,0,0,date('m'),date('d'),date('Y'));
echo $today,'<br>';

//ile lat mineło od 1 stycznia 1970
$year=$today/(60*60*24*365);
echo (int)$year,'<br>'; //51

//poprzedni rok
$lastyear= mktime(0,0,0,date('m'),date('d'),date('Y')-1);
$year= $lastyear/(60*60*24*365);
echo (int)$year,'<br>'; //50
?>

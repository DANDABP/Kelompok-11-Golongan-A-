<?php 
$nilai=90;
echo "contoh if else <br>";
if($nilai>80){echo "selamat anda mendapat grade A <br>";}
else {echo "maaf anda belum dapat grade A <br>";};
echo "contoh switch <br>";
switch($nilai){
    case 100 : echo "Nilai yang dipilih 100 <br>";
break;
    case 90 : echo "Nilai yang dipilih 100 <br>";
break;
} echo "contoh for <br>";
for($i=1;$i<=5;$i++) {
    echo "looping for ke :  $i <br>";
}
echo "contoh while <br>";
$j=1;
while($j<=5){
    echo "looping while ke:  $j <br>";
    $j++;
}

?>
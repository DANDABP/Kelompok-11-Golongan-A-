<?php
$nilai = 90;
echo "Contoh if else <br>";
if($nilai > 80)
    {echo "Selamat anda mendapat nilai A <br>";}
else if ($nilai > 70 && $nilai < 80)
    {echo "Maaf anda belum mendapat grade A <br>";}
echo "Contoh Switch <br>";
switch($nilai){
    case 100 : echo "Nilai yang dipilih 100 <br>";
    break;
    case 90 : echo "Nilai yang dipilih 90 <br>";
    break;
    default :
    echo "Niali yang dipilih bukan 90 dan 100 <br>";
break;
}
echo "Contoh for <br>";
for ($i = 1; $i<=5;$i++){
    echo "Looping for ke : ".$i."<br>";
}
echo "Contoh while <br>";
$j = 1;
while ($j <= 5){
    echo "Looping while ke : ".$j."<br>";
    $j++;
}
?>
<?php
$punakawan = array("Semar", "Gareng", "Petruk", "Bagong");
echo $punakawan[0]; //hasilnya semar
echo "<br>";
echo $punakawan[3]; //hasilnya bagong
echo "<br>";

$punakawan[1]="Semar";
$punakawan[2]="Gareng";
$punakawan[3]="Petruk";
$punakawan[4]="Bagong";
echo $punakawan[0]; //hasilnya petruk
echo "<br>";
foreach($punakawan as $isi){
    echo $isi."<br>";
}

for($i<=4;$i=1;$i--){
    echo "Punakawan : ".$punakawan[$i]."<br>";
}
?>
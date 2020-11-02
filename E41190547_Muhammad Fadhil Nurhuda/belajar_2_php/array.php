<?php
$punakawan = array("semar", "Gareng", "Petruk", "bagong");
echo $punakawan[0];//semar
echo "<br>";
echo $punakawan[3]; // bagong
echo "<br>";

$punakawan[1]="Semar";
$punakawan[2]="Gareng";
$punakawan[3]="Petruk";
$punakawan[4]="bagong";
echo $punakawan[0]; //hasilnya petruk

for($i=1; $i<=4;$i++){
    echo "looping for : $punakawan[$i] <br>";
}
?>
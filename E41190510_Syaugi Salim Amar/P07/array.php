<?php
$punakawan = array("semar", "gareng", "petruk", "bagong");
echo $punakawan[0];
echo "<br>";
echo $punakawan[3];
echo "<br>";

$punakawan[1]="semar";
$punakawan[2]="gareng";
$punakawan[3]="petruk";
$punakawan[4]="bagong";
echo $punakawan[3];
echo "<br>";
print_r ($punakawan);
$i = 1;
while($i<5){
    echo $punakawan[$i];
    echo "<br>";
    $i++;
}
$i = 4;
while($i>0){
    echo $punakawan[$i];
    echo "<br>";
    $i--;
}
?>
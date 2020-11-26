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
$punakawan[5]="arjuna";
$punakawan[6]="yudistira";
echo $punakawan[0]; //hasilnya petruk
echo "<br>";

// perulangan for
// for($i=1; $i<=4;$i++){
//     echo "looping for : $punakawan[$i] <br>";
// }

// perulangan for dengan break
for($i=1; $i<=6;$i++){
 if ($i == 3) {
 continue;
 }  
    echo "looping for : $punakawan[$i] <br>";
}


// Perulangan dengan while
// $j = 1;
// do {
//     echo "looping for $punakawan[$j] <br>";
//     $j++;
// } while( $j < 5);
?>
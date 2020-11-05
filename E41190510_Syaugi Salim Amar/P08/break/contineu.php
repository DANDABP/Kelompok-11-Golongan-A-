<?php
$a = 1;

for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
do{
    echo "halo $a";

    if($a > 8){
    break;
    }
    $a++;
} while($a <= 10);
echo "<br>";
$a = 0;
while($a <= 10){
    echo $a;
    echo "<br>";
    if($a == 5){
    break;
    }
    $a++;
}
while($a<7){
    echo $a;
    echo "<br>";
    if($a==7){
        $a++;
        continue;
    }
    $a++;
}
?>
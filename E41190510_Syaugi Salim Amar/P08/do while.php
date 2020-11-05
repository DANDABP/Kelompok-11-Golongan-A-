<?php
$a = array('a','b','c','d','e');

$x = 1;
$i = 0;
$j = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

do{
    echo "saya belajar do while $x <br>";
    $x++;
} while ($x < 10);

do{
    do{
        echo $a[$i];
        echo "<br>";
        $i++;
    } while($i<=4);
    $j++;
}while ($j<3);
?>
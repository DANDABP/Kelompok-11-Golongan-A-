<?php
$number = array(1, 2, 3, 4, 5);
foreach($number as $value){
    echo "value is $value <br />";
}
echo "<br>";
$number[0] = "one";
$number[1] = "two";
$number[2] = "three";
$number[3] = "four";
$number[4] = "five";
foreach($number as $value){
    echo "value is $value <br />";
}
echo "<br>";
foreach($number as $index => $value){
    echo "index is $index <br />";
    echo "value is $value <br />";
    echo "<br>" ;
}
?>
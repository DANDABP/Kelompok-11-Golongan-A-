<?php
$marks = array(
    "mohammad" => array(
        "physics" => 35,
        "math" => 30,
        "chemistry" => 39
    ),
    "qadir" => array(
        "physics" => 38,
        "math" => 32,
        "chemistry" => 29
    ),
    "zara" => array(
        "physics" => 31,
        "math" => 322,
        "chemistry" => 39
    )
    );
echo "marks for mohammad in physics : ";
echo $marks['mohammad']['physics'];
echo "marks for qadie in math : ";
echo $marks['qadir']['math'];
echo "marks for zara in chemistry : ";
echo $marks['zara']['chemistry'];
?>
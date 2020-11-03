<?php 
//method untuk membuat array assosiatif
$salaries = array (
    "mohammad" => 2000,
    "qadir" => 1000,
    "zara" => 500,
);
echo "salary of mohammad is " . $salaries['mohammad'] . "<br />";
echo "salary of qadir is " . $salaries['qadir'] . "<br />";
echo "salary of zara is " . $salaries['zara'] . "<br />";
// Cara kedua untuk membuat array
$salaries['mohammad'] = "high";
$salaries['qadir'] = "medium";
$salaries['zara'] = "low";
echo "salary of mohammad is" . $salaries['mohammad'] . "<br />";
echo "salary of qadir is" . $salaries['qadir'] . "<br />";
echo "salary of zara is" . $salaries['zara'] . "<br />";

?>
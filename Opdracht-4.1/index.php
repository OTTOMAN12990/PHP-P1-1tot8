<?php

$products = [
    ["bmw", "m4", "2", "75.120"],
    ["audi", "rs7", "4", "88.459"],
    ["volkswagen", "golf", "20", "24.999"],
    ["maserati", "ghibli", "7", "64.999"],
    ["Tablet", "GalaxyTab 9", "50", "299.99"]
];

$products[1][0] = "Ferrari";
$products[1][1] = "F40";
$products[1][2] = "3";
$products[3][2] = "120";

echo "de " . $products[1][0];
echo "<br>de " . $products[1][3];
echo '<pre>';
print_r($products);
echo '</pre>';
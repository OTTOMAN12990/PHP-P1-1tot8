<?php

$prices = [100, 200, 300, 400, 500];

$i = 0;
while ($i < count($prices)) {
    if ($prices[$i] < 500) {
        echo "Het prijs is: " . $prices[$i] . "<br>";
        $prices[$i] += 50;
        echo "De nieuwe prijs is: " . $prices[$i] . "<br><br>";
    }
    $i++;
}
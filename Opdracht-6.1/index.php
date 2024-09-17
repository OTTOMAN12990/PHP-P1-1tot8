<?php

$numbers = [5, 10, 15, 20, 25];

for ($i = 0; $i < count($numbers); $i+=1){
    echo "Het getal is: " . $numbers[$i] . "<br>";
    echo "Het getal x 2: " . ($numbers[$i] * 2) . "<br>";
}
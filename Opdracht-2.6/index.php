<?php

$score = 78;
if ($score >= 90) {
    echo "Geweldig"
} elseif ($score >= 75) {
    echo "Goed"
} elseif ($score >= 55) {
    echo "Voldoende";
    break;
    default:
    echo "Onvoloende";
}

echo "<br>";

// Ternary operator
echo ($score > 55) ? "Geslaagd" : "Gezakt";

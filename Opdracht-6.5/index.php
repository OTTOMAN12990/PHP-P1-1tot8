<?php
 
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
 
 
for ($i = 0; $i < count($matrix); $i++) {
    for ($e = 0; $e < count($matrix[$i]); $e++) {
       
        echo $matrix[$i][$e] . " ";
    }
   
    echo "<br>";
}
?>
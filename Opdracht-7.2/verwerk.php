<?php

if (isset($_GET['search'])) {

    $search = htmlspecialchars($_GET['search']);
   
    
    echo "<h1>Je zoekterm:</h1>";
    echo "<p>Zoekterm: " . $search . "</p>";
} else {
    echo "<p>Geen zoekterm opgegeven.</p>";
}
?>
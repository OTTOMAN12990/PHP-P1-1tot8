<?php

$pets = [
    "pet1" => ["type" => "dog", "name" => "ff",  "age" => "4"],
    "pet2" => ["type" => "bird", "name" => "ff",  "age" => "3"],
    "pet3" => ["type" => "fish", "name" => "ff", "age" => "1"],
    "pet4" => ["type" => "cat", "name" => "ff",  "age" => "4"],
];

print "Pet3: animal type : " . $pets["pet3"]["type"] . "<br>";
print "Pet3: animal name : " . $pets["pet3"]["name"] . "<br>";
print "Pet3: animal age : " . $pets["pet3"]["age"] . "<br>";

print "Pet2: Animal age: " .($pets["pet2"]["age"] + 1) . "<br>";



?>

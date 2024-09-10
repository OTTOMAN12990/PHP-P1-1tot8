<?php

$books = [
    "book1" => ["titel" => "ww2", "author" => "tarkan", "pages" => "1"],
    "book2" => ["titel" => "9/11", "author" => "tarkan", "pages" => "2"],
    "book3" => ["titel" => "jew", "author" => "tarkan", "pages" => "3"],
    "book4" => ["titel" => "De Ontdekking van de Hemel", "author" => "Harry Mulisch", "pages" => "900"],
];

echo $books["book2"]["titel"] . ' ';
echo $books["book2"]["author"] . ' ';
echo $books["book2"]["pages"] . '<br> ';
$books["book1"]["pages"] = '350';

var_dump ($books);
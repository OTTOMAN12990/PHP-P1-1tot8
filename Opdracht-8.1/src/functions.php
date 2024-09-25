<?php
 
function sanitize_input($data) {

    $data = trim($data);

    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
 
    return $data;
 
    
}

function format_input($data) {

    return strtoupper($data);
}
<?php
// Function to read files
declare(strict_types=1);

function lees_bestand(string $string): void{
    $bestand = fopen($string, "r");

    while(!feof($bestand)){
        $blog_regel = fgets($bestand);
        echo $blog_regel, "<br>";
    }
}

// Function to go to another url path
$root = substr($_SERVER['SCRIPT_NAME'],
    0,
    strpos($_SERVER['SCRIPT_NAME'], '/public') + 7);

define("ROOT_URL", $root);

function url_path(string $path): string {
    if($path[0] != '/') {
        $path = "/" . $path;
    }
    return ROOT_URL . $path;
}


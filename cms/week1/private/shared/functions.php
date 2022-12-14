<?php

function lees_bestand($string){
    $bestand = fopen($string, "r");

    while(!feof($bestand)){
        $blog_regel = fgets($bestand);
        echo $blog_regel, "<br>";
    }
}

$root = substr($_SERVER['SCRIPT_NAME'],
    0,
    strpos($_SERVER['SCRIPT_NAME'], '/public') + 7);

define("ROOT_URL", $root);

function url_path($path) {
    if($path[0] != '/') {
        $path = "/" . $path;
    }
    return ROOT_URL . $path;
}

<?php
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("SHARED_PATH", PRIVATE_PATH . "/shared");

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

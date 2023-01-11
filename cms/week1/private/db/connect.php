<?php
// phpinfo();

$servername = "localhost";
$dbname = "cms";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
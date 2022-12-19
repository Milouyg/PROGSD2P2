<?php
include "../../private/init.php";
include "../../private/shared/header.php";
?>

<h1>Recepten</h1>
<br>
<?php
lees_bestand("recepten.txt");
?>

<?php
include SHARED_PATH . "/footer.php"; 
?>
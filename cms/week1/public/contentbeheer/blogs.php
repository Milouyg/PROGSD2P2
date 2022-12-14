<?php include "../../private/init.php"; ?>
<?php include SHARED_PATH . "/header.php"; ?>

    <h1>
        Blogs
    </h1>
    <?php 
    lees_bestand("blogs.txt");
    ?>

<?php include SHARED_PATH . "/footer.php"; ?>
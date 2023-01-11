<?php

include "../../private/init.php";
include "../../private/shared/header.php";

// $url = "http://localhost:3000/index.php";
// if (filter_var($url, FILTER_VALIDATE_URL)) {
//     echo " This is a valid url";
// } else {
//     echo "This is nog a valid url";
// }

if(isset($_POST["submit"])){
    checkFormValues("fname");
    checkFormValues("lname");
    checkFormValues("comment");
    if( filter_var(checkFormValues("email"), FILTER_VALIDATE_EMAIL)) {
    } 
    else {
        echo "Not validated email";
    }
}


function checkFormValues($formPostKey)
{
    if (isset($_POST[$formPostKey]) && !empty($_POST[$formPostKey])) {
        $badWords = array("bobba", "kut", "godverdomme", "hoer", "tyfus", "kkr");
        $changeBadWord = "#@*!";

        $filterValue = trim($_POST[$formPostKey]);
        $filterValue = stripslashes($filterValue);
        $filterValue = htmlspecialchars($filterValue);
        $filterValue = str_replace($badWords, $changeBadWord, $filterValue);
        echo $filterValue;
        return $filterValue;
    } else {
        echo "Please fill in your ${formPostKey} in :D";
    }
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url_path("/style/style.css"); ?>">
    <title>Form</title>
</head>

<body>
    <form class="form" action="" method="POST">
        <label class="form__label" for="fname">First name</label>
        <input class="form__input" type="text" name="fname" placeholder="First name">
        <label class="form__label" for="lname">Last name</label>
        <input class="form__input" type="text" name="lname" placeholder="Last name">
        <label class="form__label" for="email">Email</label>
        <input class="form__input" type="text" name="email" placeholder="Email">
        <label class="form__label" for="comment">Comment</label>
        <textarea class="form__input" type="text" name="comment" placeholder="Type your comment"></textarea>
        <input class="form__submit" type="submit" value="submit" name="submit">
    </form>
</body>

</html>

<?php include "../../private/shared/footer.php"; ?>

<?php
$db = "INSERT INTO beheerder(voornaam, achternaam, email, bericht)
        VALUES(voornaam, achternaam, email, comment)";

?>
<?php

    if(isset($_POST["submit"])){  
        checkFormValues("fname");
        checkFormValues("lname");
        checkFormValues("email");
        checkFormValues("comment");
    }

    function checkFormValues($formPostKey){
        if(isset($_POST[$formPostKey]) && !empty($_POST[$formPostKey])){
            $badWords = array( "bobba", "dombo", "kut", "godverdomme", "hoer", "tyfus");
            $changeBadWord = "#@*!";

            $filterValue = trim($_POST[$formPostKey]);
            $filterValue = stripslashes($filterValue);
            $filterValue = htmlspecialchars($filterValue);
            $filterValue = str_replace($badWords, $changeBadWord, $filterValue);
            return $filterValue;
        }
        else{
            echo "Please fill in your ${formPostKey} :D";
        }
    };

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>
<body>
    <form class="form" action="" method="POST">
        <label class="form__label" for="fname">First name</label>    
        <input class="form__input" type="text" name="fname" >
        <label class="form__label" for="lname">Last name</label>    
        <input class="form__input" type="text" name="lname" >
        <label class="form__label" for="email">Email</label>    
        <input class="form__input" type="text" name="email" >
        <label class="form__label" for="comment">Comment</label>    
        <input class="form__input" type="text" name="comment" >
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
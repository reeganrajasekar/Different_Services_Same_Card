<?php
session_start();
if ($_POST["email"]=="ration@gmail.com") {
    if ($_POST["password"]=="ration") {
        $_SESSION["lock"] = "xiny9387tdpq##*&B98oyo8B@*O&^PB^B$";
        header("Location: /ration/home.php");
        die();
    } else {
        header("Location: /ration/?err=username or password is incorrect!");
        die();
    }
} else {
    header("Location: /ration/?err=username or password is incorrect!");
    die();
}


?>
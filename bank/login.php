<?php
session_start();
if ($_POST["email"]=="bank@gmail.com") {
    if ($_POST["password"]=="bank") {
        $_SESSION["lock"] = "xiny9387tdpq##*&B98oyo8B@*O&^PB^B$";
        header("Location: /bank/home.php");
        die();
    } else {
        header("Location: /bank/?err=username or password is incorrect!");
        die();
    }
} else {
    header("Location: /bank/?err=username or password is incorrect!");
    die();
}


?>
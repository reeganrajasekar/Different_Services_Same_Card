<?php
require("../layout/db.php");
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = test_input($_POST['name']);
$mobile = test_input($_POST['mobile']);
$email = test_input($_POST['email']);
$pin = test_input($_POST['pin']);

$sql = "INSERT INTO user (name , mobile , pin,email)
VALUES ('$name' ,'$mobile','$pin','$email')";

if ($conn->query($sql) === TRUE) {
    header("Location: /admin/home.php?page=1&msg=User Added Successfully !");
    die();
} else {
    header("Location: /admin/home.php?page=1&err=Something went Wrong!");
    die();
}


?>
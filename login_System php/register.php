<?php
include ("db/config.php");

if (isset($_POST["Submit"])) {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $password = $_POST["Password"];
    $number = $_POST["Number"];

    $result = mysqli_query($mysqli, "insert into login values('','$name', '$email', '$password', '$number')");
    if ($result) {
        echo " success";
    } else {
        echo "Something Wrong";
    }
}
?>
<?php
include("../config/config.php");

$usernameuser = $_POST["username_user"];
$passworduser = $_POST["password_user"];
$emailuser = $_POST["email_user"];

if (isset($_POST["username_user"])) {

    $tambah = mysqli_query($con, "INSERT INTO login VALUES(NULL,'$usernameuser','$passworduser')");
    header("location:index.php");
    // if (isset($_POST[$passworduser])) {



    // }
}



?>
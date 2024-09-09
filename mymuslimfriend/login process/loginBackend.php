<?php

include("../config/config.php");
// session_start();

$username = $_POST["username"];
$password = $_POST["password"];

// cari user information berdasarkan input user
$sql = mysqli_query($con, "SELECT * FROM login WHERE username = '$username'");
$match = mysqli_fetch_array($sql);

// matching user input dgn username dlm database
$username_db = $match["username"];
$password_db = $match["password"];



if (isset($_POST["username"]) && !empty($_POST["username"])) {
    if (isset($_POST["password"]) && !empty($_POST["password"])) {
        if ($username == $username_db && $password == $password_db) {
            // $_SESSION['id_user'] = $match["id_user"];
            session_start();
            $_SESSION['user'] = $match["username"];
            $_SESSION['id'] = $match["id"];
            header("location:../main/main.php");
        } else {
            // $_SESSION['error'] = "Username or password invalid";
            header("location:index.php");
        }
    } else {
        header("location:index.php");
    }
} else {
    header("location:index.php");
}



?>
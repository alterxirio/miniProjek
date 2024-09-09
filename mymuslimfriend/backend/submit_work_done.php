<?php
session_start();
include("../config/config.php");

if (isset($_POST["done"])) {
    if (isset($_POST["id_list"])) {
        $id_list = $_POST["id_list"];
        $done_list_sql = mysqli_query($con, "UPDATE user SET status_list = 2 WHERE id_list = $id_list");
        header("location:../main/main.php");
    } else {
        echo "invalid id_list";
    }
}
?>
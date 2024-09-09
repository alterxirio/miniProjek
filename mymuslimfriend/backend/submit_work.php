<?php
session_start();
include("../config/config.php");

$Type_Of_Ibadah = $_POST["Type_Of_Ibadah"];
$Date= $_POST["date"];
$Time = $_POST["time"];
$id = $_SESSION['id'];
$status_list = 1;

if (isset($_POST["Type_Of_Ibadah"]) && !empty($_POST["Type_Of_Ibadah"])) {
    if (isset($_POST["date"]) && !empty($_POST["date"])) {
        if (isset($_POST["time"]) && !empty($_POST["time"])) {

                    $add = mysqli_query($con, "INSERT INTO user VALUES('$id','$Type_Of_Ibadah','$Date','$Time')");
                    header("location:../main/main.php");

        } else {
            header("location:../main/main.php");
        }
    } else {
        header("location:../main/main.php");
    }
} else {
    header("location:../main/main.php");
}



?>
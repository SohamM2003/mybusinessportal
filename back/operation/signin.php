<?php

include('../include/config.php');
session_start();

if (isset($_POST['login']) && isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    $query = "SELECT `email`, `password` FROM `users` WHERE `email` = '$email'";

    $queryrun = mysqli_query($con, $query) or die("query failed!");

    if ($queryrun->num_rows > 0) {
        while ($rows = mysqli_fetch_array($queryrun)) {
            $email = $rows['email'];
            $password = $rows['password'];

            if ($pwd == $password) {

                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;

                echo "<script>window.location='../../dash.php';</script>";
            } else {
                echo "<script>alert('Wrong Password!');</script>";
                echo "<script>window.location='../../index.php';</script>";
            }
        }
    } else {
        echo "<script>window.location='../../index.php';</script>";
    }
}

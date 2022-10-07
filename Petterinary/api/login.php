<?php
session_start();
include 'db.php';

$email = $_POST['email']; // retrieve data input dari value <input> dengan property name 'email'
$password = md5($_POST['password']); // retrieve data input dari value <input> dengan property name 'password'

$sql = mysqli_query($connection, "SELECT * FROM tbl_user WHERE email='$email' AND password='$password'");
$rs = mysqli_fetch_array($sql);

if (is_array($rs)) {
  header("Location: ../Home Page/HomePage.html");
} else {
  $_SESSION['login_error'] = "Enter a proper credentials!";
  header("Location: ../Login Page/Login&Register.php");
}


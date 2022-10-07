<?php
session_start();
include 'db.php';

// Retrieve data dari form
$email = $_POST['email'];
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$dateOfBirth = $_POST['dob'];
$password = md5($_POST['password']);

// Search apakah email sudah ada atau belum
$sql = mysqli_query($connection, "SELECT * FROM tbl_user WHERE email='$email'");
$rs = mysqli_fetch_array($sql);

if (is_array($rs)) { // Jika email ada
  $_SESSION['register_error'] = "Email has exist!";
  header("Location: ../Login Page/Login&Register.php");
} else { // Jika email tidak ada
  $query = "INSERT INTO tbl_user (first_name, last_name, email, birth_date, password) VALUES ('$firstName', '$lastName', '$email', '$dateOfBirth', '$password')";
  $sql = mysqli_query($connection, $query);

  $_SESSION['login_message'] = "Sign up successfully!";
  header("Location: ../Login Page/Login&Register.php");
}

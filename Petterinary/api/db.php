<?php
$url = 'localhost';
$username = 'root';
$password = '';
$connection = mysqli_connect($url, $username, $password, "petterinary");
if (!$connection) {
  die('Could not Connect My SQL');
}

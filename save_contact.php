<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_dealer_hino";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "INSERT INTO contact_us (name, phone, message) VALUES ('$name', '$phone', '$message')";

if (mysqli_query($koneksi, $sql)) {
  header("Location: contact_us.html?success=1");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);

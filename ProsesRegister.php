<?php

session_start();

$_SESSION['nama'] = $_POST['nama'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];

echo "Registrasi berhasil <br>";
echo "<a href='login.php'>Login disini</a>";

?>
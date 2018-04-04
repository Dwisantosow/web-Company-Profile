<?php
include('koneksi.php');

session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

if (empty($username) && empty($password)) {
    header('location:../index.php?error=1');
    break;
} else if (empty($username)) {
    header('location:../index.php?error=2');
    break;
} else if (empty($password)) {
    header('location:../index.php?error=3');
    break;
}

$q = mysql_query("select * from admin where username='$username' and password='$password'");
if (mysql_num_rows($q) == 1) {
    $_SESSION['username'] = $username;
    header('location:../beranda.php');
} else {
    header('location:../beranda.php?error=4');
}
?>
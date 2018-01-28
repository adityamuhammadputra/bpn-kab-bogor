<?php
include "../proses/connect.php";
$username = $_POST['username'];
$password = $_POST['password'];
$cek = "select * from tbl_user WHERE username = '$username' AND password = '$password'";
$hasil = mysqli_query($conn,$cek);
$row = mysqli_fetch_array($hasil);
if ($row['username'] == $username AND $row['password'] == $password)
{
	session_start();
	$_SESSION['username'] = $username;
	header("location:../dashboard");
}
else {
echo "<script>alert('Maaf anda gagal Login silahkan cek kembali Username, dan Password anda');history.go(-1);</script>";
 }
 ?>
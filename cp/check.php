<?php
include '../mysql/variables.php';

$username = $_POST['username'];
$password = $_POST['password'];

$con = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);
$query = "SELECT username, password FROM admin";
$result;

if (mysqli_connect_errno()) {
	echo mysqli_connect_error();
} else {
	// success, query
	$result = mysqli_query($con, $query);
}

while ($row = mysqli_fetch_array($result)) {
	if ($row['username'] == $username) {
		if ($row['password'] == $password) {
			session_start();
			$_SESSION['login'] = "1";
			header('Location: /mjproject/cp/index.php');
		}
	}
}
?>
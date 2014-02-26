<?php
include '../mysql/variables.php';

//get the post variables
$name = $_POST['firstname']." ".$_POST['lastname'];
$email = $_POST['email'];
$confirmEmail = $_POST['confirmemail'];
$year = $_POST['year'];
$gradDate = $_POST['graddate'];
$major = $_POST['major'];
$minor = $_POST['minor'];
$submission = $_POST['submission'];
$involvement = $_POST['involvement'];
$awards = $_POST['awards'];

$con = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);

$query = "INSERT INTO student (isRecommended, name, email, major, minor, year, gradDate, recommendation, involvement, awards)
VALUES ('0', '" . $name . "', '" . $email . "', '" . $major . "', 
'" . $minor . "', '" . $year . "', '" . $gradDate . "', '" . $submission . "', 
'" . $involvement . "', '" . $awards . "')";

$result;

if (mysqli_connect_errno()) {
	echo mysqli_connect_error();
} else {
	// success, query
	if ($email != $confirmEmail) {
		header ('Location: http://localhost/mj/submit/');
	} else if ($email == '' || $confirmEmail == '' || $name == '' || $major == '' || $minor == '') {
		header ('Location: http://localhost/mj/submit/');
	} else {
	$result = mysqli_query($con, $query);
	}
}
?>
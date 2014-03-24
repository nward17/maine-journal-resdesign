<?php
include 'variables.php';

$con = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);
$queryS = $DB_QUERY_STUDENTS;
$queryR = $DB_QUERY_RECOMMENDERS;
$result_students;
$result_recommenders;

if (mysqli_connect_errno()) {
	echo mysqli_connect_error();
} else {
	// success, query
	$result_students = mysqli_query($con, $queryS);
	$result_recommenders = mysqli_query($con, $queryR);
}
?>
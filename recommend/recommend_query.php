<?php
//include our credentials to connect to the database
include '../mysql/variables.php';

//set our variable to check if a student was recommended or not
$isRecommended = $_POST['isRecommended'];
$recommended;

//change our true/false value into a number so we can input it into the database
//we do it here because I prefer to pass a true/false string into the php
if ($isRecommended == "true") {
	$recommended = '1';
} else if ($isRecommended == "false") {
	$recommended = '0';
}

//get the post variables for the recommender
$recommenderName = $_POST['recommenderFirstName'] . " " . $_POST['recommenderLastName'];
$title = $_POST['title'];
$phone = $_POST['phone'];
$recommenderEmail = $_POST['recommenderEmail'];
$recommenderConfirmEmail = $_POST['recommenderConfirmEmail'];

//get the post variables for the student
$studentName = $_POST['firstname'] . " " . $_POST['lastname'];
$studentEmail = $_POST['email'];
$studentConfirmEmail = $_POST['confirmemail'];
$year = $_POST['year'];
$gradDate = $_POST['graddate'];
$major = $_POST['major'];
$minor = $_POST['minor'];
$submission = $_POST['submission'];
$involvement = $_POST['involvement'];
$awards = $_POST['awards'];

//connect to the database
$con = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);

//create the query for inserting data into the 'reccommender' table
$recommenderQuery = "INSERT INTO recommender (name, title, phone, email)
VALUES ('" . $recommenderName . "', '" . $title . "', '" . $phone . "', 
'" . $recommenderEmail . "')";

//create the query for inserting data into the 'student' table
$studentQuery = "INSERT INTO student (isRecommended, name, email, major, minor, year, gradDate, recommendation, involvement, awards)
VALUES ('" . $recommended . "', '" . $studentName . "', '" . $studentEmail . "', '" . $major . "', 
'" . $minor . "', '" . $year . "', '" . $gradDate . "', '" . $submission . "', 
'" . $involvement . "', '" . $awards . "')";

//create some variables for use later on
$result;
$result1;

//check for a connection error
if (mysqli_connect_errno()) {
	echo mysqli_connect_error();
} else {
	// success, query
	//only run our recommenders query if the student has a recommender
	if ($recommended == '1') {
		$result = mysqli_query($con, $recommenderQuery);
	}
	$result1 = mysqli_query($con, $studentQuery);
}
?>
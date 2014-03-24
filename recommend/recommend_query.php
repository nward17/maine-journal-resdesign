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
$con = mysqli_connect("localhost", "root", "asap4u2u", "mainejournal_nic");

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
$result2;

	echo ($_FILES["uploaded_file"]["tmp_name"]);

//Сheck that we have a file
if((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {
  	  $filename = $_FILES['uploaded_file']['name'];
      $newname = dirname(__FILE__).'/upload/'.$filename;
      //Check if the file with the same name is already exists on the server
      if (!file_exists($newname)) {
        //Attempt to move the uploaded file to it's new place
        chmod($_FILES['uploaded_file']['tmp_name'], 0777);
        if ((move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$newname))) {
           echo "It's done! The file has been saved as: ".$newname;
			$query = "INSERT into student (attachments) VALUES ('" . $newname . "')";
			$result2 = mysqli_query($con, $query);
        } else {
           echo "Error: A problem occurred during file upload!";
        }
      } else {
         echo "Error: File ".$_FILES["uploaded_file"]["name"]." already exists";
      }
} else {
	//do nothing, no file uploaded
}

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
	//header ('Location: thankyou.php');
}
?>
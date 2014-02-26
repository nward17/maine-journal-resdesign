<html>
	<head>
		<?php include '../containers/header.php'

		?>
		<link rel="stylesheet" type="text/css" href="../css/main.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="../css/header.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="../css/footer.css" media="screen" />
		<script>
			var formIsActive = new Boolean();
			window.onload = function() {
				document.getElementById("recommender").style.display = "none";
				var checkbox = document.getElementById('checkbox');
				checkbox.addEventListener('click', function() {
					if (checkbox.checked == 1) {
						document.getElementById("recommender").style.display = "block";
						document.getElementById("isRecommended").innerHTML = "true";
						formIsActive = true;
					} else {
						document.getElementById("recommender").style.display = "none";
						document.getElementById("isRecommended").innerHTML = "false";
						formIsActive = false;
					}
				});
			}
			function validateForm() {
				//student form variables
				var a = document.forms["form"]["emailConfirm"].value;
				var b = document.forms["form"]["firstname"].value;
				var c = document.forms["form"]["lastname"].value;
				var d = document.forms["form"]["email"].value;
				var e = document.forms["form"]["major"].value;
				var f = document.forms["form"]["minor"].value;

				//recommender form variables
				var g = document.forms["form"]["recommenderFirstName"].value;
				var h = document.forms["form"]["recommenderLastName"].value;
				var i = document.forms["form"]["title"].value;
				var j = document.forms["form"]["phone"].value;
				var k = document.forms["form"]["recommenderEmail"].value;
				var l = document.forms["form"]["recommenderConfirmEmail"].value;

				var atpos = a.indexOf("@");
				var dotpos = a.lastIndexOf(".");
				if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
					alert("Please enter a valid e-mail address!");
					return false;
				}

				if (formIsActive) {
					if (a == null || a == "" || b == null || b == "" || c == null || c == "" || d == null || d == "" || e == null || e == "" || f == null || f == "") {
						alert("One or more of your fields are empty.");
						return false;
					}
				} else if (!formIsActive) {
					if (a == null || a == "" || b == null || b == "" || c == null || c == "" || d == null || d == "" || e == null || e == "" || f == null || f == "" || g == null || g == "" || h == null || h == "" || i == null || i == "" || j == null || j == "" || k == null || k == "" || l == null || l == "") {
						alert("One or more of your fields are empty.");
						return false;
					}
				}

				return true;
			}

		</script>
	</head>
	<body>
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<div class = "box">
			<form name="form" action="recommend_query.php" method="post" onsubmit="return validateForm()">
				<font size="20"><b>Maine Journal Recommendation</b></font>
				<br />
				<br />

				This form allows you to recommend a student that you know to be featured in the Maine Journal (<a href ="mainejournal.umaine.edu">mainejournal.umaine.edu</a>).
				<br />
				If you would like to ask a student to submit his or her own work to be considered for the Maine Journal,
				<br />
				please direct the student to <a href ="http://localhost/mj/submission">mainejournal.umaine.edu/submission</a>.
				<br />
				<br />
				Required: <font color="red">*</font>
				<br />
				<br />

				<label><font size="4"><b>Are you recommending a student? Please click here.</b></font>
					<input type="checkbox" id="checkbox" name="checkbox" value="value">
				</label>
				<br />
				<br />

				<!-- CREATE A HIDDEN TEXTBOX CONTAINING THE DATA FOR IF THE STUDENT IS RECOMMENDED -->
				<textarea name="isRecommended"id="isRecommended" style="display:none;">false</textarea>				


				<div id="recommender">
					<font size="5"><b>Your Contact Information</b></font>
					<br />
					<br />

					First name:
					<input type="text" name="recommenderFirstName" id="recommenderFirstName">
					Last name:
					<input type="text" name="recommenderLastName" id="recommenderLastName">
					<font color="red">*</font>
					<br />
					<br />
					Title:
					<input type="text" name="title" id="title">
					<font color="red">*</font>
					<br />
					<br />
					Phone Number:
					<input type="text" name="phone" id="phone">
					<font color="red">*</font>
					<br />
					<br />
					Email:
					<input type="text" name="recommenderEmail" id="recommenderEmail">
					<font color="red">*</font>
					<br />
					<br />
					Confirm Email:
					<input type="text" name="recommenderConfirmEmail" id="recommenderConfirmEmail">
					<font color="red">*</font>
				</div>
				<br />
				<font size="5"><b>Student Information</b></font>
				<br />
				<br />

				First name:
				<input type="text" name="firstname" id="firstname">
				Last name:
				<input type="text" name="lastname" id="lastname">
				<font color="red">*</font>
				<br />
				<br />
				Email:
				<input type="text" id="email" name="email">
				<font color="red">*</font>
				<br />
				<br />
				Confirm Email:
				<input type="text" id="emailConfirm" name="confirmemail">
				<font color="red">*</font>
				<br />
				<br />
				Major:
				<input type="text" name="major" id="major">
				<font color="red">*</font>
				<br />
				<br />
				Minor:
				<input type="text" name="minor" id="minor">
				<font color="red">*</font>
				<br />
				<br />
				Year in School:
				<select name="year">
					<option></option>
					<option>First Year</option>
					<option>Sophomore</option>
					<option>Junior</option>
					<option>Senior</option>
				</select>
				<font color="red">*</font>
				<br />
				<br />
				Expected Graduation Date:
				<select name="graddate">
					<option></option>
					<option>2014</option> </option> <option>2015</option>
					<option>2016</option>
					<option>2017</option>
					<option>2018</option>
					<option>2019</option>
					<option>2020</option>
				</select>
				<font color="red">*</font>
				<br />
				<br />
				Submission:
				<br />
				<textarea name="submission" rows="4" cols="50"></textarea>
				<br />
				<br />
				Campus/Community Involvement:
				<br />
				<textarea name="involvement" rows="4" cols="50"></textarea>
				<br />
				<br />
				Honors/Awards:
				<br />
				<textarea name="awards" rows="4" cols="50"></textarea>
				<br />
				<br />
				<br />
				<font size="2" color=black>If you would like to include any documents or links
					<br />
					with your submission form
					<br />
					(i.e. abstract, paper, presentation, photos, video, etc.),
					<br />
					please attach them using the button below.</font>
				<br />
				<br />
				<input type='file' name='upload'>
				<br />
				<br />
				<input type="submit" value="Submit">
				<br />
		</div>
		</form>
		<br />
		<br />
		<!-- FOOTER (THIS SHOULD ALSO BELONG ON EVERY PAGE AND NOT BE CHANGED) -->
		<?php
		include '../containers/footer.php';
		?>
	</body>
</html>
<html>
	<head>
		<?php include '../containers/header.php'

		?>
		<link rel="stylesheet" type="text/css" href="../css/main.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="../css/header.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="../css/footer.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="../css/custom.css" media="screen" />
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
			<form method="post" action="submit_query.php">
				<font size="20"><b>Maine Journal Submission</b></font>
				<br />
				<br />

				If you are a UMaine student and you would like to be
				<br />
				considered for the Maine Journal (<a href ="mainejournal.umaine.edu">mainejournal.umaine.edu</a>),
				<br />
				please start by filling out this form.
				<br />
				If you would like to recommend another student for the Maine Journal,
				<br />
				please go to <a href ="mainejournal.umaine.edu/recommendation">mainejournal.umaine.edu/recommendation</a>.
				<br />
				<br />
				Required: <font color="red">*</font>
				<br />
				<br />

				<font size="5"><b>Contact Information</b></font>
				<br />
				<br />

				First name:
				<input type="text" name="firstname">
				Last name:
				<input type="text" name="lastname">
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
				Major:
				<input type="text" name="major">
				<font color="red">*</font>
				<br />
				<br />
				Minor:
				<input type="text" name="minor">
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
				<input type="submit" value = "Submit">

				<script>
					function checkForm() {
						var firstName = document.getElementById('firstname').value;
						var lastName = document.getElementById('lastname').value;
						var email = document.getElementById('email').value;
						var emailConfirm = document.getElementById('emailConfirm').value;
						var major = document.getElementById('major').value;
						var minor = document.getElementById('minor').value;

						if (email != emailConfirm) {
							alert("Your emails do not match!");
							return false;
						}

						if (firstName.value == '' || lastName.value == '' || email.value == '' || emailConfirm.value == '' || major.value == '' || minor.value == '') {
							alert("Please correct one or more fields!");
							return false;
						}
					}
				</script>
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
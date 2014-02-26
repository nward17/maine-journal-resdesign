<?php
session_start();
include '../containers/header.php';
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/controlpanel.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="../css/main.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="../css/header.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="../css/footer.css" media="screen" />
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
		<br />
		<br />
		<br />
		<br />

		<?php

		if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
			echo '
		<br /><br />
		<div class = "box">
			<form method="post" action="check.php">
				<center>
					<font size="20"><b>Maine Journal Control Panel Log In</b></font>
					<br />
					<br />
					Username:
					<input type="text" name="username">
					<br />
					<br />
					Password:
					<input type="password" name="password">
					<br />
					<br />
					<input type = "submit" value ="Log In">
				</center>
			</form>
		</div>
		<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	';
		} else {
			echo '
		<div class = "box">
			<form method="post" action="check.php">
				<center>
					<font size="20"><b>Welcome Back, Staff Member!</b></font><br />
					<font size = "5"><a href ="logout.php">LOGOUT</a></font><br /><br />
					<font size="4" color ="red"><b>Below are your pending submissions and recommendations:</b></font><br /><br />
					<font size="20" color ="gray"><b>Students:</b></font><br /><br />
					<table class="fancy" border="1" style="width:800px;">
					<th>Recommended:</th><th>Name:</th><th>Email:</th><th>Major:</th><th>Minor:</th><th>Year:</th><th>Graduation Date:</th>
					<th>Recommendation:</th><th>Involement:</th><th>Awards:</th><th>Attatchments?:</th>
				';

			include '../mysql/database.php';
			while ($row = mysqli_fetch_array($result_students)) {
				echo '<tr>';

				echo '<td>';
				if ($row['isRecommended'] == 1) {
					echo 'Yes';
				} else if ($row['isRecommended'] == 0) {
					echo 'No';
				}
				// is the student reccomended?
				echo '</td>';

				echo '<td>';
				echo $row['name'];
				// student name
				echo '</td>';

				echo '<td>';
				echo $row['email'];
				// student email
				echo '</td>';

				echo '<td>';
				echo $row['major'];
				// student major
				echo '</td>';

				echo '<td>';
				echo $row['minor'];
				// student minor
				echo '</td>';

				echo '<td>';
				echo $row['year'];
				// year in school
				echo '</td>';

				echo '<td>';
				echo $row['gradDate'];
				// expected graduation date
				echo '</td>';

				echo '<td>';
				echo $row['recommendation'];
				// recommendation
				echo '</td>';

				echo '<td>';
				echo $row['involvement'];
				// involvement
				echo '</td>';

				echo '<td>';
				echo $row['awards'];
				// awards
				echo '</td>';

				echo '<td>';
				echo $row['attatchments'];
				// attatchments
				echo '</td>';

				echo '</tr>';
			}
			echo '
</table>';

			echo '
					<font size="20" color ="gray"><b>Recommenders:</b></font><br /><br />
					<table class="fancy" border="1" style="width:800px;">
					<th>Name:</th><th>Title:</th><th>Phone:</th><th>Email</th>';

			while ($row = mysqli_fetch_array($result_recommenders)) {
				echo '<tr>';

				echo '<td>';
				echo $row['name'];
				// recommender name
				echo '</td>';

				echo '<td>';
				echo $row['title'];
				// recommenders title
				echo '</td>';

				echo '<td>';
				echo $row['phone'];
				// reccomenders phone number
				echo '</td>';

				echo '<td>';
				echo $row['email'];
				// recommenders email
				echo '</td>';

				echo '</tr>';
			}

			echo ';
					</table>
				</center>
			</form>
		</div>';

		}
		?>
	</body><br /><br />
	<!-- FOOTER (THIS SHOULD ALSO BELONG ON EVERY PAGE AND NOT BE CHANGED) -->
	<?php
	include '../containers/footer.php';
	?>
</html>
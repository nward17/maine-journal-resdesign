<!-- THE MAINE JOURNAL HOMEPAGE -->
<html>
	<head>
		<!-- IMPORT OUR CSS, NAME THE SITE, AND ADD A FAVICON -->
		<title>The Maine Journal</title>
		<link rel="shortcut icon" href="images/favicon.ico" />
	</head>
	<body>

		<!-- CHECK FOR SCOLLING -->
		<script>
			window.onscroll = function(ev) {
				if (document.body.scrollTop > 125) {
					var header = document.getElementById("header");
					var logo = document.getElementById("maine_journal_logo");
					header.className = "headerCompressed";
					logo.className = "mj_logo";
					logo.src = "/mjproject/images/MJ-White.png";
				} else if (document.body.scrollTop < 125) {
					var header = document.getElementById("header");
					var logo = document.getElementById("maine_journal_logo");
					header.className = "header";
					logo.className = "maine_journal_logo";
					logo.src = "/mjproject/images/MaineJournal-Logo_white.png";
				}
			};
		</script>

		<!-- CREATE THE HEADER FOR THE SITE, THIS BELONG ON EVERY PAGE AND SHOULD BE THE SAME EVERYWHERE -->
		<div id="header" class="header">

			<!-- LOAD OUR UMAINE LOGO -->
			<div onclick="window.location = 'http://www.umaine.edu';"><img
				id="umaine_logo" class="umaine_logo"
				src="/mjproject/images/umaine.png" />
			</div>

			<!-- LOAD OUR MAINE JOURNAL LOGO -->
			<div onclick="window.location = '';"><img
				id="maine_journal_logo" class="maine_journal_logo"
				src="/mjproject/images/MaineJournal-Logo_white.png" />
			</div>

			<!-- LOAD OUR BUTTONS -->
			<!-- BROWSE -->
			<div id="browse" class="browse">
				Browse
			</div>
			<!-- SUBMIT -->
			<a href="recommend/">
			<div id="submit" class="submit">
				Submit
			</div></a>

			<!-- LOAD OUR SEARCH BOX -->
			<img
			id="search" class="search"
			src="/mjproject/images/Buttons-5 copy.png" />
			<input id="searchBox" class="searchBox" type="text" />

		</div>

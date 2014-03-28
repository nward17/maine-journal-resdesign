<!-- THE MAINE JOURNAL HOMEPAGE -->
<html>
	<head>
		<!-- IMPORT OUR CSS, NAME THE SITE, AND ADD A FAVICON -->
		<title>The Maine Journal</title>
		<link rel="shortcut icon" href="images/favicon.ico" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	</head>
	<body>

		<!-- CHECK FOR SCOLLING -->
		<script>
			window.onscroll = function(ev) {
				if (document.body.scrollTop > 125) {
					var header = document.getElementById("header");
					var logo = document.getElementById("maine_journal_logo");
					
					//bug when changing className, not sure what's going on
					header.className = "headerCompressed";
					logo.className = "mj_logo";
					logo.src = "";
				} else if (document.body.scrollTop < 125) {
					var header = document.getElementById("header");
					var logo = document.getElementById("maine_journal_logo");
					header.className = "header";
					logo.className = "maine_journal_logo";
					logo.src = "/maine_journal/redesign/images/MaineJournal-Logo_white.png";
				}
			};
		</script>

		<!-- CREATE THE HEADER FOR THE SITE, THIS BELONG ON EVERY PAGE AND SHOULD BE THE SAME EVERYWHERE -->
		<div id="header" class="header">

			<!-- LOAD OUR UMAINE LOGO -->
			<div onclick="window.location = 'http://www.umaine.edu';"><img
				id="umaine_logo" class="umaine_logo"
				src="/maine_journal/redesign/images/umaine.png" />
			</div>

			<!-- LOAD OUR MAINE JOURNAL LOGO -->
			<div onclick="window.location = '/maine_journal/redesign/index.php';"><img
				id="maine_journal_logo" class="maine_journal_logo"
				src="/maine_journal/redesign/images/MaineJournal-Logo_white.png" />
			</div>

			<!-- LOAD OUR BUTTONS -->
			<!-- BROWSE -->
			<div id="browse" class="browse">
				<ul id="topMenu">
				<li>
					<a href="#">Browse</a>
					<ul class="noJS">
            			<li><a href="archives/2010-2011">2010-2011</a></li>
            			<li><a href="archives/2011-2012">2011-2012</a></li>
            			<li><a href="archives/2012-2013">2012-2013</a></li>
            			<li><a href="archives/2013-2014">2013-2014</a></li>
        			</ul>
        		</li>
				<li><a href="/recommend/">Submit</a></li>
				<li><a href="/tedx/tedx.php">TEDxUMaine</a></li>
			</div>

			<!-- LOAD OUR SEARCH BOX -->
			<!-- <img
			id="search" class="search"
			src="/maine_journal/redesign/images/Buttons-5 copy.png" />
			<input id="searchBox" class="searchBox" type="text" /> -->
			<script>$(function(){
    			$('#topMenu').find('> li').hover(function(){
        		$(this).find('ul')
        		.removeClass('noJS')
        		.stop(true, true).slideToggle('fast');
    			});
			});
			</script

		</div>

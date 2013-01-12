<!DOCTYPE html>
<html>
<head>
	<meta charset"utf-8" />
	<title>Encoding Status</title>
	<!-- Begin CSS -->
	<link href="css/lava.css" rel="stylesheet" type="text/css" />
	<link href="css/application.css" rel="stylesheet" type="text/css" />
	<!-- End CSS -->
</head>
<body class="lava">
<!-- Begin Structure -->
<div class="wrapper">	
	<div class="container">
		<div id="left" class="two first">
			<div class="inside">
				<header>
					<span class="title">encodingStatus</span>
				</header>
				<nav class="main">
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="/queue">Queue</a></li>
						<li><a href="/profiles">Profiles</a></li>
						<li><a href="/collections">Collections</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div id="content" class="ten last">
			<div class="inside">
				<nav class="breadcrumbs top">
					<?php include 'breadcrumbs.php';?>
				</nav>
				<section>
					<?php include 'content.php';?>
				</section>
				<nav class="pager bottom">
					<?php include 'pager.php';?>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- End Structure -->
<!-- Begin Javascript -->
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>-->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/application.js" type="text/javascript"></script>
<!-- End Javascript -->
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset"utf-8" />
	<title>Encoding Status</title>
	<!-- Begin CSS -->
	<link href="assets/css/lava.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/application.css" rel="stylesheet" type="text/css" />
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
				<nav class="main nomobile">
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="/jobs">Jobs</a></li>
						<li><a href="/profiles">Profiles</a></li>
						<li><a href="/collections">Collections</a></li>
						<li><a href="/settings">Settings</a></li>
					</ul>
				</nav>
				<nav class="mobile">
					<?php echo buildMobileMenu(array(
						'/' => 'Home',
						'/jobs' => 'Jobs',
						'/profiles' => 'Profiles',
						'/collections' => 'Collections',
						'/settings' => 'Settings',
					)); ?>
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
		<div id="footer" class="ten shift-two first last">
			<div class="inside">
				<a href="https://github.com/slogsdon/EncodingStatus">Encoding Status Github</a>
			</div>
		</div>
	</div>
</div>
<!-- End Structure -->
<!-- Begin Javascript -->
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>-->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/application.js" type="text/javascript"></script>
<!-- End Javascript -->
</body>
</html>
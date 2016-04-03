<!DOCTYPE html>
<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
	<!-- Title Icon -->
	<link rel="icon" type="image/png" sizes="160x160" href="img/favicon-160.png">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>

	<!-- navbar -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand navbar-left pacifico" href="index.php">Wild and Wonderful</a>
				<p class="navbar-left">Full Frame Photography</p>
			</div>
			<!-- Collapse Links -->
			<div class="collapse navbar-collapse navbar-right" id="nav-collapse">
				<ul class="nav navbar-nav">
					<li class="<?php if($active == "home"){echo "active";} ?>"><a href="index.php">Home</a></li>
					<li class="<?php if($active == "pricing"){echo "active";} ?>"><a href="pricing.php">Pricing</a></li>
					<li class="<?php if($active == "contact"){echo "active";} ?>"><a href="contact.php">Contact Us</a></li>
				</ul>
			</div>
		</div> <!-- end navbar container -->
	</nav> <!-- end navbar -->
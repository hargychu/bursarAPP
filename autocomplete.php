<!DOCTYPE HTML>
<html>
<head>
	<!-- Meta -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>BursarApp:: Search</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<!-- Load CSS -->
	<link href="style/style.css" rel="stylesheet" type="text/css" />
	<!-- Load Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans:regular,bold" type="text/css" />
	<!-- Load jQuery library -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<!-- Load custom js -->
	<script type="text/javascript" src="scripts/custom.js"></script>
</head>
<body>
	<div id="main">

		<!-- Main Title -->
		<div class="icon"></div>
		<h1 class="title">Search Students by Name</h1>
		<h5 class="title">(searches through all the students database)</h5>

		<!-- Main Input -->
		<input type="text" id="search" autocomplete="off">

		<!-- Show Results -->
		<h4 id="results-text">Showing results for: <b id="search-string">Array</b></h4>
		<ul id="results"></ul>


	</div>

</body>
</html>
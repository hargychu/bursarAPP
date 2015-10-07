<html>
<head>
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<!-- Load CSS -->
	<link href="style/style.css" rel="stylesheet" type="text/css" />
	<!-- Load Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans:regular,bold" type="text/css" />
	<!-- Load jQuery library -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<!-- Load custom js -->
	<script type="text/javascript" src="scripts/custom.js"></script>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 2 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
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
		<div id="txtHint"><b>Person info will be listed here...</b></div>

	</div>

<!--<form>
<select name="users" onChange="showUser(this.value)">
  <option value="">Select a person:</option>
  <option value="1">Gichuhi Haron</option>
  <option value="2">Kagimu Joseph</option>
  <option value="3">Mahaja Moses</option>
  <option value="4">Brian Kitaka</option>
  </select>
</form> -->
<!--<br>
<div id="txtHint"><b>Person info will be listed here...</b></div> -->

</body>
</html>
<?php
/************************************************
	The Search PHP File
************************************************/


/************************************************
	MySQL Connect
************************************************/

// Credentials
$dbhost = "localhost";
$dbname = "mydb";
$dbuser = "root";
$dbpass = "";

//	Connection
global $mydb_db;

$mydb_db = new mysqli();
$mydb_db->connect($dbhost, $dbuser, $dbpass, $dbname);
$mydb_db->set_charset("utf8");

//	Check Connection
if ($mydb_db->connect_errno) {
    printf("Connect failed: %s\n", $mydb_db->connect_error);
    exit();
}

/************************************************
	Search Functionality
************************************************/

// Define Output HTML Formating
$html = '';
$html .= '<li class="result">';
$html .= '<a target="_blank" href="getuser.php">';
$html .= '<h3>nameString</h3>';
$html .= '<h4>functionString</h4>';
$html .= '</a>';
$html .= '</li>';

// Get Search
$search_string = preg_replace("/[^A-Za-z0-9]/", " ", $_POST['query']);
$search_string = $mydb_db->real_escape_string($search_string);

// Check Length More Than One Character
if (strlen($search_string) >= 1 && $search_string !== ' ') {
	// Build Query
	$query = 'SELECT * FROM student WHERE firstName LIKE "%'.$search_string.'%" OR studentID LIKE "%'.$search_string.'%"';

	// Do Search
	$result = $mydb_db->query($query);
	while($results = $result->fetch_array()) {
		$result_array[] = $results;
	}

	// Check If We Have Results
	if (isset($result_array)) {
		foreach ($result_array as $result) {

			// Format Output Strings And Hightlight Matches
			$display_function = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['firstName' or 'LastName']);
			$display_name = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['studentID']);
			//Change the display url from here
			
			$display_url = 'http://search.php'.urlencode($result['firstName']).'&lang=en';

			// Insert Name
			$output = str_replace('nameString', $display_name, $html);

			// Insert id number
			$output = str_replace('functionString', $display_function, $output);

			// Insert URL
			$output = str_replace('urlString', $display_url, $output);

			// Output
			echo($output);
		}
	}else{

		// Format No Results Output
		$output = str_replace('urlString', 'javascript:void(0);', $html);
		$output = str_replace('nameString', '<b>No Results Found.</b>', $output);
		$output = str_replace('functionString', 'Sorry :(', $output);

		// Output
		echo($output);
	}
}


/*
// Build Function List (Insert All Functions Into DB - From PHP)

// Compile Functions Array
$functions = get_defined_functions();
$functions = $functions['internal'];

// Loop, Format and Insert
foreach ($functions as $function) {
	$function_name = str_replace("_", " ", $function);
	$function_name = ucwords($function_name);

	$query = '';
	$query = 'INSERT INTO search SET id = "", function = "'.$function.'", name = "'.$function_name.'"';

	$tutorial_db->query($query);
}
*/
?>
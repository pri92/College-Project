<?php
//Get our database abstraction file
require('database.php');

if (isset($_GET['search']) && $_GET['search'] != '') {
	//Add slashes to any quotes to avoid SQL problems.
	$search = $_GET['search'];
	$suggest_query = db_query("SELECT distinct(courses) as suggest FROM list WHERE courses like('" .$search . "%') ");
	while($suggest = db_fetch_array($suggest_query)) {
		echo $suggest['suggest'] . "\n";
	}
}
?>
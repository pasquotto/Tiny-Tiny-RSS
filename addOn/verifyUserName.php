<?php
	set_include_path(dirname(__FILE__) ."/../include" . PATH_SEPARATOR .
		get_include_path());
	require_once "config.php";
	require_once "db.php";
 	
 	header("Content-Type: application/xml");

	$login = trim(db_escape_string( $_REQUEST['login']));

	$result = db_query( "SELECT id FROM ttrss_users WHERE
			LOWER(login) = LOWER('$login')");
			
	$is_registered = db_num_rows($result) > 0;

	print "<result>";

	printf("%d", $is_registered);

	print "</result>";

	return;
?>

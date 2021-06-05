<?php

    require (dirname(__DIR__).'\includes\rb-mysql.php');

	global $wpdb;
	$charset_collate = $wpdb->get_charset_collate();

    R::setup('mysql:host=localhost; dbname=wpfolder', 'root', 'root');

    session_start();

    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
        // last request was more than 30 minutes ago
        session_unset();     // unset $_SESSION variable for the run-time
        session_destroy();   // destroy session data in storage
    }
    $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

?>
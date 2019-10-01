<?php require_once("include/functions.php"); ?>
<?php
		// Four steps to closing a session
		// (i.e. logging out)

		// 1. Find the session
		session_name("erpsys1");
		session_start();
		
		// 2. Unset all the session variables
		$_SESSION = array(user_id);
		
		// 3. Destroy the session cookie
	/*	if(isset($_COOKIE[session_name("erpsys1")])) {
			setcookie(session_name("erpsys1"), '', time()-42000, '/');
		} */
		
		// 4. Destroy the session
		session_destroy();
		
		redirect_to("index.php?logout=1");
?>
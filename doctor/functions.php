<?php 

/**
 * Redirect to main page
 * @param  string $msg
 * @return void
 */
function safe_redirect($page  , $msg = "" )
{
	header( "location: $page.php?msg=". $msg, true, 302 );
	die();
}
 ?>
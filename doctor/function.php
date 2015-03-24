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

/**
 * generate a random string 
 * @param  integer $length [number of chr which i wanna generate it]
 * @return string          the generated string 
 */
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
 ?>
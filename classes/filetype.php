<?php 

function type($filename)
{
	$type=explode(".", $filename);
	$type=end($type);
	return $type;
}
 ?>
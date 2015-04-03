<?php 
/**
 * generate a random string with given length
 * @param  integer $length [the length of the string you wanna it to return]
 * @return string          [description]
 */
function rand_string($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


function is_valid_type($ex , $valid= array()) {

}


 ?>

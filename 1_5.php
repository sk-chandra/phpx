<?php
/**
 * Created by PhpStorm.
 * User: sudhanshu
 * Date: 11/3/16
 * Time: 3:20 PM
 */

$s = "This is some amazing shit!";

$words = explode(' ', $s);
$words = array_reverse($words);
$s = implode(' ', $words);
print $s;

?>

<?php
/**
 * Created by PhpStorm.
 * User: sudhanshu
 * Date: 11/3/16
 * Time: 3:33 PM
 */

    function str_rand($length = 10, $characters = '1234567890abcdefghijklmnopqrstuvwxyz'){
        if(!is_int($length) || $length < 0){
            return false;
        }
        $character_length = strlen($characters) - 1;
        $string = '';

        for($i = $length; $i > 0; $i--){
            $string .= $characters[mt_rand(0, $character_length)];
        }
        return $string;
    }

    print str_rand();

?>


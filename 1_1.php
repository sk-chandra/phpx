<?php
/**
 * Created by PhpStorm.
 * User: sudhanshu
 * Date: 11/3/16
 * Time: 1:51 PM
 */

$post = array('email' => '@sudhanshu@ch', 'add' => 'Noida');

if(strpos($post['email'], '@') === false){
    print 'Please enter @ in the email address!';
}else{
    print "We are ready to go $post[email]";
}

?>
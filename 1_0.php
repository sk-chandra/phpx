<?php
/**
 * Created by PhpStorm.
 * User: sudhanshu
 * Date: 11/3/16
 * Time: 1:19 PM
 */

print <<< END
    "This is funny that PHP storm does everything automatically!"<br>
    It does not consider newline too.<br>
    Funny hah!
END;

$var = 10;

if($var > 0){
    $url = '/Test/4_6.php';
    $text = 'Deal More Cards';
}else{
    $url = '/new-game.php';
    $text = 'Start New Game';
}

print <<< HTML
There are <b> $var </b> cards left.
<p>
<a href="$url"> $text </a>
</p>
HTML;


?>



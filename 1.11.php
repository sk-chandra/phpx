<?php
/**
 * Created by PhpStorm.
 * User: sudhanshu
 * Date: 11/3/16
 * Time: 4:47 PM
 */
$states = array(array('Name' => 'Delhi', 'Head' => 'Kheju', 'Population' => '11212'),
                array('Name' => 'Rajasthan', 'Head' => 'Vasu', 'Population' => '123212'),
                array('Name' => 'Maharashtra', 'Head' => 'fadnavis', 'Population' => '56465'),
                array('Name' => 'Bihar', 'Head' => 'Nitish', 'Population' => '999999'));

$filename = './trial.csv';
$fh = fopen('$filename', 'w') or die("can't open $filename");
foreach($states as $one_state){
    if(fputcsv($fh, $one_state) == false){
        die("can't write CSV line");
    }
}
fclose($fh) or die("can't close $filename");

?>
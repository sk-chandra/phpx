<?php
/**
 * Created by PhpStorm.
 * User: sudhanshu
 * Date: 11/3/16
 * Time: 5:27 PM
 */
    $filename = "./trial.csv";
    $fp = fopen("$filename", "r") or die("Can't open file");
    print "<table>\n";
    while($csv_line = fgetcsv($fp)){
        print "<tr>";
        for($i = 0, $j = count($csv_line); $i < $j; $i++){
            print "<td>".htmlentities($csv_line[$i])."</td>";
        }
        print "</tr>";
    }
    print "</table>";

    fclose($fp) or die("Can'r close file");

?>
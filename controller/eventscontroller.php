<?php
$handle = fopen("{$_SERVER['DOCUMENT_ROOT']}/resources/eventlist.csv", "r");
if ($handle !== false) {
    while (($data = fgetcsv($handle)) !== false) {
            echo "<article>\n";
        echo "<p>ID:{$data[0]}</p>\n";
        echo "<h2>{$data[1]}</h2>\n";
        echo "<h3>{$data[2]}</h3>\n";
        echo "<p>{$data[3]}</p>\n";
        echo "</article>\n";
    }
    fclose($handle);
}
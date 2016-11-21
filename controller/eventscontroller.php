<?php
$handle = fopen("{$_SERVER['DOCUMENT_ROOT']}/resources/eventlist.csv", "r");
    if (strpos($_SERVER['REQUEST_URI'], "{$data[0]}") !== TRUE) {
        switch ("{$data[0]}") {
            case "1":
                echo "<article>\n";
                echo "<p>ID:{$data[0]}</p>\n";
                echo "<a href=/events/{$data[0]}><img id=\"thumbnail\" src='{$data[4]}' alt=\"Bild der Band\"{$data[1]}></a>\n";
                echo "<h2>{$data[1]}</h2>\n";
                echo "<h3>{$data[2]}</h3>\n";
                echo "<p>{$data[3]}</p>\n";
                echo "</article>\n";
                break;
            case "2":
                echo "<article>\n";
                echo "<p>ID:{$data[0]}</p>\n";
                echo "<a href=/events/{$data[0]}><img id=\"thumbnail\" src='{$data[4]}' alt=\"Bild der Band\"{$data[1]}></a>\n";
                echo "<h2>{$data[1]}</h2>\n";
                echo "<h3>{$data[2]}</h3>\n";
                echo "<p>{$data[3]}</p>\n";
                echo "</article>\n";
                break;
            default:
                echo "Dein Event <p>ID:{$data[0]}</p>\n wurde leider nicht gefunden";
        }
    } else {
        if ($handle !== false) {
        while (($data = fgetcsv($handle)) !== false) {
            echo "<article>\n";
            echo "<p>ID:{$data[0]}</p>\n";
            echo "<a href=/events/{$data[0]}><img id=\"thumbnail\" src='{$data[4]}' alt=\"Bild der Band\"{$data[1]}></a>\n";
            echo "<h2>{$data[1]}</h2>\n";
            echo "<h3>{$data[2]}</h3>\n";
            echo "<p>{$data[3]}</p>\n";
            echo "</article>\n";
        }
    }
    fclose($handle);
}
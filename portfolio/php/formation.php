<?php
$data=yaml_parse_file("yaml/formation.yaml");

foreach ($data as $ley => $value) {
    echo "<div><ul>";
    echo '<li><h1>' . $ley . '</h1></li>';
    foreach ($value as $subkey => $subvalue) {
        echo '<li><p>'.$subkey.' : '.$subvalue.'</p></li>';
    }
        echo "</ul></div>";
    }

                           
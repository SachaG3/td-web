<?php
    $data=yaml_parse_file("yaml/experience.yaml");
    $menu=$data['association'];
    echo "<div><ul>";
    foreach($menu AS $fichier => $onglet){
        echo '<li><p> '.$fichier.' : '.$onglet.'</p></li>';
    }
    echo "</ul></div>";
                                    
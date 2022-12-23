<?php
    $data=yaml_parse_file("yaml/menu.yaml");
    $menu=$data['menu'];
                                    // print_r($menu);
    foreach($menu AS $fichier=>$onglet){
    echo '<a class="nav" href="#'.$fichier.'" onclick="choisDePage(\''.$fichier.'\')"><p class="navT">'.$onglet.'</p></a></li>';

    }
    ?>
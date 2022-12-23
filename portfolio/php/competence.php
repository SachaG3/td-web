<?php
    $data=yaml_parse_file("yaml/competence.yaml");
    $menu=$data['competence'];
                                    // print_r($menu);
    foreach($menu AS $fichier => $onglet){
        echo '<div class="grille"><h1>'.$fichier.'</h1><img src="img/barre_'.$onglet.'.jpg" alt="'.$onglet.'"></div>';
    }
                                    
<?php
    function nomprenom(){
        $data=yaml_parse_file("yaml/info.yaml");
        return $data['prenom'].' '.$data['nom'];
    };
    function aniversaire(){
        $data=yaml_parse_file("yaml/info.yaml");
        $data2 = $data['age'];
        $dateActuelle = date("Y-m-d");
        $aniversaire = $data2['annee'] . "-" . $data2['mois'] . "-0" . $data2['jour'];
        $timestampNaissance = strtotime($aniversaire);
        $age = abs(strtotime($dateActuelle) - $timestampNaissance) / (60 * 60 * 24 * 365);
        echo round($age);
    }
?>


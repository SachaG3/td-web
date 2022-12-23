<?php
 $data=yaml_parse_file("../yaml/info.yaml");
 $menu=$data['info'];
// print_r($menu);
echo '<ul>';
foreach($menu AS $fichier=>$onglet){
   echo '<li><a href="'.$fichier.'.php">'.$onglet.'</a></li>';
}
echo '</ul>';
?>

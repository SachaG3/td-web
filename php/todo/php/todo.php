<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/screen.css">
</head>
<body>
<?php
if(!isset($_SESSION)) {
    session_start();
}
$list = $_SESSION['todolist'] ?? [];

if(isset($_POST['username'])){
    $_SESSION['user']=$_POST['username'];
    
}
if(isset($_SESSION['user'])){
    $res="<p class='btn btn-success'>".$_SESSION['user']."</p>";
    $res.="<a class='btn btn-danger deco' href=../deco.php>Déconnexion</a>";
    echo $res;
}



?>
<h1>Todo liste</h1>
<a href="addElement.php" class="btn btn-dark">Ajouter un élément</a>
<a href="deleteAll.php" class="btn btn-danger">Supprimer tout</a>

<ul class="list-group">
<?php
foreach ($list as $index=>$elm){
    echo "<li class='list-group-item'>$elm <a href='deleteElement.php?num=$index'>X</a></li>";
}



?>
</ul>
</body>
</html>

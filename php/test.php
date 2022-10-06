<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="test.css">
</head>
<body>

    
<?php
$message2=$_GET['msg']??"Bonjour!";
$max=$_GET['nb']??5;
$message='hello world!';
$couleur=$_GET['color']??"black";
$bggcouleur=$_GET['bggcolor']??"blue";
$bgcouleur=$_GET['bgcolor']??"bisque";
?>
<form method='get'>
        <input type="test" name="msg" value="<?=$message2?>">
        <input type="number" value="1" max="6" min="1" name="nb" value="<?=$max?>">
        <input type="color" name="color" value="<?=$couleur?>">
        <input type="color" name="bggcolor" value="<?=$bggcouleur?>">
        <input type="color" name="bgcolor" value="<?=$bgcouleur?>">
        <button type="submit">Valider</button>
    </form>
<?php
foreach (range(1, $max) as $number) {
    echo "<h1 style='color : $couleur;background-color:$bggcouleur'>$message2</h1>";
    echo "<body style='background-color:$bgcouleur'></body>";
    echo "<h2>$message</h2>";
    echo "<h3>$message</h3>";
}
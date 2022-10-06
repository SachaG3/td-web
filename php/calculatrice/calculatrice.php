<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calculatrice.css">
    <title>Document</title>
</head>
<body>

<?php
$nbr1=0;
$nbr2=$_GET['nbr2']??0;
$resultat=0;
?>
<form method='get'>
    <input type="button" value="2" name="nbr1" onclick="$resultat=value">
    <input type="button" value="5" name="nbr1">
    <input type="button" value="5" name="nbr1">
    <input type="button" value="5" name="nbr1">
    <input type="button" value="5" name="nbr1">
    <input type="button" value="5" name="nbr1">
    <input type="button" value="5" name="nbr1">
    <input type="button" value="5" name="nbr1">
    <input type="button" value="5" name="nbr1">
    <input type="button" value="5" name="nbr1">
    <input type="button" value="5" name="nbr1">
    <input type="button" value="5" name="nbr1">
    <input type="button" value="5" name="nbr1">
    <input type="button" value="5" name="nbr1">
    <input type="button" value="5" name="nbr1">
    <input type="button" value="5" name="nbr1">
    <input type="button" value="5" name="nbr1">
    <input type="button" value="5" name="nbr1">
    <input type="button" value="5" name="nbr1">
    <input type="button" value="5" name="nbr1">
    <input type="button" value="5" name="nbr1">
    <input type="button" value="5" name="nbr1">
    <input type="button" value="5" name="nbr1">
    <button type="submit">=</button>
        
    </form>
<?php
echo "$resultat";

?>
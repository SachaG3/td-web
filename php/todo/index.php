<?php
session_start();
if(isset($_POST['username'])){
    $_SESSION['user']=$_POST['username'];
}  
            
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <form action="php/todo.php" method="post">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="username">
            <label for="floatingInput">Pseudo</label>
        </div>
    </form>
</body>
</html>
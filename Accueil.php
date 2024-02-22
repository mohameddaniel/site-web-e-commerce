<?php
 session_start();
 $log = $_SESSION['login'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="ac.css">
</head>
<body bgcolor="#FFFFFF">
    <p align='center'>
   <b> Bienvenue <font size='2' color='blue'><?php echo $log; ?></font> ,chez Daniel E-co</b>
    </p>
   <p align='center'> votre panier est vide?</p>
   <p align='center'><a href='init.php'>Cliquer ici</a> pour  le remplir</p>
   <p align="center"><a href='logout.php'>deconnexion</a></p>
</body>
</html>
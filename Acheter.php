<?php

session_start();

$panier = $_SESSION['panier'];
$total = 0 ;
if(isset($_GET['label']))
{
    switch($_GET['label']){
        case 'IPHONE_13_PRO':
            $total = 0 ;
            $total= $panier['IPHONE_13_PRO']*1000 ;
            
         break;
         case'IPHONE_14_PRO':
            $total = 0 ;
            $total= $panier['IPHONE_14_PRO']*1020 ;
            
    }
}else header('Location:ajouterArticle.php');

$_SESSION['article'] = array(array("IPHONE_14_PRO",1020,$panier['IPHONE_14_PRO']),array("IPHONE_13_PRO",1000,$panier['IPHONE_13_PRO']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }

        .btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-right: 10px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        p {
            margin: 0;
            padding: 10px 0;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .total {
            text-align: right;
            font-weight: bold;
            font-size: 20px;
        }

        .links {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 50px;
        }

        .links a {
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <h1>Panier</h1>
    <div class="container">
        <p class="total">Le total de votre panier : <?php echo $total ."$"; ?></p>
        <div class="links">
            <a href="ajouterArticle.php" class="btn">Modifier mon panier</a>
            <a href="init.php" class="btn">Vider mon panier</a>
            <a href="Client.php" class="btn">Confirmer la commande</a>
        </div>
    </div>
</body>
</html>


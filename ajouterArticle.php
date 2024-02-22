<?php
    session_start();
    $panier = $_SESSION['panier'];
    if(isset($_GET['ajout'])){
        switch($_GET['ajout']){
            case "IPHONE_14_PRO":
                $panier["IPHONE_14_PRO"]++;
                break;
            case "IPHONE_13_PRO":
                $panier["IPHONE_13_PRO"]++;
                break;
            case "IPHONE_14_PROMUNIS":
             if( $panier["IPHONE_14_PRO"] >0)
             $panier["IPHONE_14_PRO"]--;
               break;
            case "IPHONE_13_PROMUNIS":
            if( $panier["IPHONE_13_PRO"] >0)
            $panier["IPHONE_13_PRO"]--;
              break;
              case "IPHONE11_PRO":
                $panier["IPHONE11_PRO"]++;
                break;
             case "IPHONE8_PLUS":
             $panier["IPHONE8_PLUS"]++;
             break;

             case "IPHONEXS":
                $panier["IPHONEXS"]++;
                break;
            case "IPHONE11_PROM":
                if($panier['IPHONE11_PRO']>0)
                $panier['IPHONE11_PRO']--;
                break;
            case "IPHONE8_PLUSM":
                if($panier['IPHONE8_PLUS']>0)
                $panier['IPHONE8_PLUS']--;
                break;
            case "IPHONEXSM":
                $panier['IPHONE8_PLUS']--;
                break;


        } 

    }
    $_SESSION['panier'] = array("IPHONE_14_PRO"=>$panier["IPHONE_14_PRO"],"IPHONE_13_PRO"=>$panier["IPHONE_13_PRO"],"IPHONE11_PRO"=> $panier["IPHONE11_PRO"],"IPHONE8_PLUS"=>$panier["IPHONE8_PLUS"],"IPHONEXS"=>$panier["IPHONEXS"]);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Téléphones</title>
    <link rel="stylesheet" type="text/css" href="styleArt.css">
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="Accueil.php">Accueil</a></li>
                <li><a href="#">Total de prix</a></li>
                <li><a href="init.php">Vider Mon panier</a></li>
            </ul>
        </nav>
    </header>
    <h1>Téléphones</h1>
    <div class="product">
        <img src="./12.jpeg" alt="Téléphone 1">
        <div>
            <h3>Iphone 13pro</h3>
            <p>Description du téléphone 1.</p>
            <p>Prix : <?php 
            if($panier['IPHONE_13_PRO']==0){
                echo "1000$";
            }else  echo $panier['IPHONE_13_PRO']*1000 ."$";
           
           ?></p>
            <p>Quantité: <a style="font-size:30px;background-color: #ff6f00;color: white;padding-left:2px;padding-right:2px;" href="ajouterArticle.php?ajout=IPHONE_13_PRO">+</a> <?php echo $panier['IPHONE_13_PRO'];?> <a style="font-size:30px;background-color: #ff6f00;color: white;padding-left:5px;padding-right:5px;" href="ajouterArticle.php?ajout=IPHONE_13_PROMUNIS">-</a></p>
            <div>
                <a href="Acheter.php?label=IPHONE_13_PRO"  class="btn add-to-cart">Acheter</a>
            </div>
        </div>
    </div>
    <div class="product">
        <img src="./12.jpeg" alt="Téléphone 2">
        <div>
            <h3>Iphone 14 pro</h3>
            <p>Description du téléphone 2.</p>
            <p>Prix :  <?php  if($panier['IPHONE_14_PRO']==0){
                echo "1020$";
            }else  echo $panier['IPHONE_14_PRO']*1020 ."$";?></p>
            <p>Quantité: <a style="font-size:30px;background-color: #ff6f00;color: white;padding-left:2px;padding-right:2px;" href="ajouterArticle.php?ajout=IPHONE_14_PRO">+</a> <?php echo $panier['IPHONE_14_PRO'];?> <a style="font-size:30px;background-color: #ff6f00;color: white;padding-left:5px;padding-right:5px;" href="ajouterArticle.php?ajout=IPHONE_14_PROMUNIS">-</a></p>
            <div>
                <a href="Acheter.php?label=IPHONE_14_PRO" class="btn add-to-cart">Acheter</a>
            </div>
        </div>
    </div>

    <div class="product">
        <img src="./12.jpeg" alt="Téléphone 3">
        <div>
            <h3>Iphone 11 pro</h3>
            <p>Description du téléphone 3.</p>
            <p>Prix :  <?php  if($panier['IPHONE11_PRO']==0){
                echo "900$";
            }else  echo $panier['IPHONE_14_PRO']*900 ."$";?></p>
            <p>Quantité: <a style="font-size:30px;background-color: #ff6f00;color: white;padding-left:2px;padding-right:2px;" href="ajouterArticle.php?ajout=IPHONE_14_PRO">+</a> <?php echo $panier['IPHONE_14_PRO'];?> <a style="font-size:30px;background-color: #ff6f00;color: white;padding-left:5px;padding-right:5px;" href="ajouterArticle.php?ajout=IPHONE_14_PROMUNIS">-</a></p>
            <div>
                <a href="Acheter.php?label=IPHONE11_PRO" class="btn add-to-cart">Acheter</a>
            </div>
        </div>
    </div>
  
</body>
</html>
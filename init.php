<?php
session_start();
$_SESSION['panier'] = array("IPHONE_14_PRO"=>0,"IPHONE_13_PRO"=>0,"IPHONE11_PRO"=>0,"IPHONE8_PLUS"=>0,"IPHONEXS"=>0);
$_SESSION['article'] = array(array("IPHONE_14_PRO",1020,0),array("IPHONE_13_PRO",1000,0));
header('Location:ajouterArticle.php');
?>
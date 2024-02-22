<?php
session_start();
$articles = $_SESSION['article'];
$login = $_SESSION['login'] ;
$pwd = $_SESSION['password'];
   require_once "connection.php";
   $sql ="SELECT * FROM client WHERE login ='$login' AND password = '$pwd'";
   $res = mysqli_query($connect,$sql);
   $tab = mysqli_fetch_assoc($res);
   $email = $tab['email'];
   $_SESSION['email']=$email;

    ?>
    <!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Facture</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        font-size: 14px;
      }
      
      table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
      }
      
      table th, table td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
      }
      
      table th {
        background-color: #eee;
      }
      
      h1, h2 {
        text-align: center;
        margin-bottom: 20px;
      }
      
      #total {
        font-weight: bold;
      }
    </style>
  </head>
  <body style="background-color: #fff;">
    <h1>Facture</h1>
    <h2>Informations du client</h2>
    <p><strong>Nom :</strong><?php echo $login;?></p>
    <p><strong>Email :</strong> <?php echo $email;?></p>
    <P><strong>Date de Commande:</strong><?php echo date("Y-m-d h:i:s");?></P>
    <p><strong>Adresse :</strong> EL jadida Hay El salam</p>
    <p><strong>Ville :</strong> El jadida</p>
    <p><strong>Code postal :</strong> 24345</p>
    <p><strong>Pays :</strong> MAROC</p>
    <h2>Articles commandés</h2>
    <table>
      <thead>
        <tr>
          <th>Article</th>
          <th>Prix unitaire</th>
          <th>Quantité</th>
          <th>Prix total</th>
        </tr>
      </thead>
      <tbody >
        <?php
        $total = 0;
        for ($i = 0; $i < count($articles); $i++) {
          $article = $articles[$i];
          $nom = $article[0];
          $prix_unitaire = $article[1];
          $quantite = $article[2];
          $prix_total = $prix_unitaire * $quantite;
          $total += $prix_total; 
          if( $quantite != 0)
          echo "<tr><td>$nom</td><td>$prix_unitaire$</td><td>$quantite</td><td>$prix_total$</td></tr>";
        }
        ?>
        <tr id="total">
          <td colspan="3">Total</td>
          <td><?php echo $total; ?>$</td>
        </tr>
      </tbody>
    </table>
    <p><a href='Acheter.php'>retourne en arrire</a></p>
    <p><a href="pdf.php">telecharger</a></p>
  </body>
</html>

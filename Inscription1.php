<?php
 require_once "connection.php";

 session_start();
if(isset($_POST['submit'])){
    if($_POST['captchar'] ==$_SESSION['code']){
        if($_POST['confirm-password']==$_POST['password']){
            $pwd = $_POST['password'];
            $Login = $_POST['login'];
            $email = $_POST['email'];
           $query = "INSERT INTO client(login,password,email) VALUES('$Login','$pwd','$email')";
           $ext_query = mysqli_query($connect,$query);
           header('Location:auth.php');
        }else{
         echo "<script type='text/javascript'>alert('confirmer le mot de passe')</script>";     
        }
    }else{
        echo "<script type='text/javascript'>alert('verfier le code ')</script>";     
      
    }   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page d'inscription</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body style="background-color: #fff;">
   
    <header>
        <h1>Connectez-vous et profitez de nos meilleurs produits</h1>
    </header>
    <main>
        <form method="post" action="./Inscription1.php">
            <table>

                <tr>
                    <td><label for="login">Login :</label></td>
                    <td><input type="text" id="login" name="login" required></td>
                </tr>
                <tr>
                    <td><label for="password">Password :</label></td>
                    <td><input type="password" id="password" name="password" required></td>
                </tr>
                <tr>
                    <td><label for="confirm-password">Confirm Password :</label></td>
                    <td><input type="password" id="confirm-password" name="confirm-password" required></td>
                </tr>
                <tr>
                    <td><label for="email">Email :</label></td>
                    <td><input type="email" id="email" name="email" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="captcha-container">
                            <label for="captcha">Recopiez le code ci-dessous :</label>
                            <img src="captchar.php" alt="captcha" class="captcha-image">
                            <input type="text" id="captcha" name="captchar" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="S'inscrire"></td>
                </tr>
            </table>
        </form>
    </main>
    <footer>
        <p>Tous droits réservés © 2023</p>
    </footer>
</body>
</html>

<?php
require_once "connection.php";
session_start();
if(isset($_POST['valide'])){
    $log = $_POST['login'];
    $pwd = $_POST['Password'];
    $_SESSION['login']=$log;
    $_SESSION['password']=$pwd;
$sql = "SELECT *FROM client WHERE login = '$log' AND password = '$pwd'";
$result = mysqli_query($connect,$sql);
$count = mysqli_num_rows($result);
if($count>0){
    header("Location:Accueil.php");
}else echo "<script type='text/javascript'>alert('Lorin ou mot de passe n'est pas correct')</script>";   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e_Commerce</title>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<video autoplay muted loop id="myVideo">
  <source src="./asset/vd.mp4" type="video/mp4">
</video>

    <form method="post" action="./auth.php">
        <center>
            <table width="300" id="tab">
                <tr>
                    <td>
                          <fieldset>
                        <legend>Identifiez-vous</legend>
                        <table>
                            <tr>
                                <td><label for="login">login:</label></td>
                                <td><input type="text" name="login" class="inpt" required ></td>
                            </tr>

                            <tr>
                                <td><label for="Password" >Password:</label></td>
                                <td><input type="password" name="Password"   class="inpt" required></td>
                            </tr>

                            <tr>
                                <td><input type="submit" name="valide" value="Connection" id="btn"></td>
                               <td> <a href="./Inscription1.php">S'inscrire</a></td>
                            </tr>
                        </table>
                       </fieldset>
                    </td>
                </tr>

            </table>
        </center>
    </form>

</body>
</html>
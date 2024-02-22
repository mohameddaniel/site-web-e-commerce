<?php
// Définir la largeur et la hauteur de l'image captcha
session_start();
$largeur = 150;
$hauteur = 50;

// Générer un code aléatoire à afficher dans l'image captcha
$code = rand(100000, 999999);
$_SESSION['code'] = $code;
// Créer une image en utilisant la fonction imagecreatetruecolor()
$image = imagecreatetruecolor($largeur, $hauteur);

// Ajouter un fond à l'image en utilisant la fonction imagecolorallocate()
$fond = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0, 0, $fond);

// Ajouter du bruit à l'image en utilisant des fonctions comme imagesetpixel() et imageline()
for ($i = 0; $i < 10; $i++) {
    $couleur = imagecolorallocate($image, rand(0, 255), rand(0, 255), rand(0, 255));
    imagesetpixel($image, rand(0, $largeur), rand(0, $hauteur), $couleur);
    imageline($image, rand(0, $largeur), rand(0, $hauteur), rand(0, $largeur), rand(0, $hauteur), $couleur);
}

// Dessiner le texte du captcha sur l'image en utilisant la fonction imagestring()
$couleur_texte = imagecolorallocate($image, rand(0, 255), rand(0, 255), rand(0, 255));
imagestring($image, 5, 30, 20, $code, $couleur_texte);

// Afficher l'image captcha en utilisant la fonction header() avec le type MIME "image/png" et la fonction imagepng()
header('Content-type: image/png');
imagepng($image);

// Libérer la mémoire utilisée par l'image
imagedestroy($image);
?>

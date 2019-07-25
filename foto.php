<?php
// Define a Imagem Original
$img = imagecreatefromjpeg("$imagem");
// Define a Logo a ser Colocada na Imagem Original
$img2 = imagecreatefromPNG("1.png");
// Define a Cor de Transparência (Logo)
$verde = imagecolorallocate($img2, 0, 0, 255); 
// Coloca Transparência no PNG (Logo)
imagecolortransparent ($img2, $verde);
// Mescla uma foto sobre a outra 0(Largura),190(Altura),0,0 (São o X e o Y) o 100 é o nivel
// de transparência
imagecopymerge($img,$img2,430,450,0,0, imagesx($img2),imagesy($img2),100); 

// Cria uma Nova Imagem com a Qualidade 70%
imagejpeg($img, NULL ,100); 
?>
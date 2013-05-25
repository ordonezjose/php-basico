<?php
/* 
====================================
CREADOR DE IMAGENES CON TEXTO v 0.2
Script creado por Lucas Ordovás 
Website: www.lucasordovas.com
====================================
*/

// Imagen que va a mostrar de fondo
$fondo = "fondo.png";

// Fuente del texto
$fuente = "alef.ttf";

// Se define el header
header("Content-type: image/png");

// Creando el fondo con la imagen
$imagen = imagecreatefrompng("$fondo");

// Color del texto
$color = imagecolorallocate($imagen,255,255,255);

// Texto que se va a mostrar
$texto1 = $_GET["txt1"];
$texto2 = $_GET["txt2"];

// imagettftext($imagen,tam,angulo,x,y,$color,$fuente,"texto");
imagettftext($imagen,12,0,12,22,$color,$fuente,$texto1);

// Salida de la imagen
imagepng($imagen);
?>
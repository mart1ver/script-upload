<?php
/********************************************************************
 * Definition des constantes / tableaux et variables liés à l'upload
 ********************************************************************/
 
// Constantes
define('TARGET', '../images/');    // Repertoire cible
define('MAX_SIZE', 1000000);    // Taille max en octets du fichier
define('WIDTH_MAX', 2000);    // Largeur max de l'image en pixels
define('HEIGHT_MAX', 2000);    // Hauteur max de l'image en pixels
 
// Tableaux de donnees
$tabExt = array('jpg','gif','png','jpeg');    // Extensions autorisees
?>
<?php

function resizeImg($name, $type)
{
   $filename = $name;

   // Définition de la largeur et de la hauteur maximale
   $width = 250;
   $height = 250;

   // Content type
   header('Content-Type: ' . $type);

   // Cacul des nouvelles dimensions
   list($width_orig, $height_orig) = getimagesize($filename);

   $ratio_orig = $width_orig / $height_orig;

   if ($width / $height > $ratio_orig) {
      $width = $height * $ratio_orig;
   } else {
      $height = $width / $ratio_orig;
   }

   // Redimensionnement
   $image_p = imagecreatetruecolor($width, $height);
   switch ($type) {
      case 'image/png':
         $image = imagecreatefrompng($filename);
         break;
      case 'image/gif':
         $image = imagecreatefromgif($filename);
         break;
      case 'image/webp':
         $image = imagecreatefromwebp($filename);
         break;
      case 'image/jpg':
      default:
      $image = imagecreatefromjpeg($filename);
   }
   $image = imagecreatefromjpeg($filename);
   imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

   // Affichage
   return $image_p;
};

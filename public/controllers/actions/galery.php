<?php

global $root;
$files = isset($_FILES['galery-imgs']) && !empty($_FILES['galery-imgs']) ? $_FILES['galery-imgs'] : '';
$stock_path = $root . '/public/upload/galery-imgs';
$json_path = $root . '/public/upload/galery-imgs/galery.json';

if (!empty($files)) {
   $json_files = [];
   $count_files = 0;
   $add_files = [];
   $count_imgs = 0;
   $base64imgs = [];
   $width = 250;
   $height = 250;
   if (!is_dir($stock_path)) {
      mkdir($stock_path, 0644);
   }
   for ($count_imgs; $count_imgs < count($files["name"]); $count_imgs++) {
      $add_files += [0=>[
         "name" => $files["name"],
         "tmp_name" => $files["tmp_name"],
         "extension" => $files["type"],
         "error" => $files["error"],
         "size" => $files["size"],
         "file" => []
      ]];


      list($width_orig, $height_orig) = getimagesize($files["tmp_name"][$count_imgs]);

      $ratio_orig = $width_orig / $height_orig;

      if ($width / $height > $ratio_orig) {
         $width = $height * $ratio_orig;
      } else {
         $height = $width / $ratio_orig;
      }
      $image_p = imagecreatetruecolor($width, $height);
      switch ($files["type"][$count_imgs]) {
         case 'image/png':
            $tmp_img = imagecreatefrompng($files["tmp_name"][$count_imgs]);
            imagecopyresampled($image_p, $tmp_img, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
            imagepng($tmp_img, $stock_path . '/' . $files["name"][$count_imgs]);
            imagedestroy($tmp_img);
            break;
         case 'image/gif':
            $tmp_img = imagecreatefromgif($files["tmp_name"][$count_imgs]);
            imagecopyresampled($image_p, $tmp_img, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
            imagegif($tmp_img, $stock_path . '/' . $files["name"][$count_imgs]);
            imagedestroy($tmp_img);
            break;
         case 'image/webp':
            $tmp_img = imagecreatefromwebp($files["tmp_name"][$count_imgs]);
            imagecopyresampled($image_p, $tmp_img, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
            imagewebp($tmp_img, $stock_path . '/' . $files["name"][$count_imgs]);
            imagedestroy($tmp_img);
            break;
         case 'image/jpeg':
         case 'image/jpg':
         default:
            $tmp_img = imagecreatefromjpeg($files["tmp_name"][$count_imgs]);
            imagecopyresampled($image_p, $tmp_img, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
            imagejpeg($tmp_img, $stock_path . '/' . $files["name"][$count_imgs]);
            imagedestroy($tmp_img);
      }
      if (file_exists($stock_path . '/' . $files["name"][$count_imgs])) {
         $data = file_get_contents($stock_path . '/' . $files["name"][$count_imgs]);
         $encoded_data = base64_encode($data);
         $base64_data = 'data:' . $files["type"][$count_imgs] . ';base64,' . $encoded_data;
         $base64imgs[$count_imgs] = $base64_data;
      }

      $add_files[0]["file"] += $base64imgs;
   }
   if (!file_exists($json_path)) {
      file_put_contents($json_path, json_encode($add_files));
   } else {
      //On récupère l'ancien JSON
      $json_datas = file_get_contents($json_path);
      $array_json = json_decode($json_datas, true);
      $array_json = array_merge($array_json,$add_files);

      $new_datas = $array_json;
      //ajouter les dernières DATAS
      file_put_contents($json_path, json_encode($new_datas));
   }
   header('Location:?part=galery_part&page=galery');
} else {
   header('Location:?part=galery_part&page=galery');
}

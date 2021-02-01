<?php

function showGalery(){
   global $root;
   $stock_path = $root . '/public/upload/galery-imgs';
   $json_path = $root . '/public/upload/galery-imgs/galery.json';
   if(!file_exists($json_path)){
      return null;
   }else{
      $json_datas = file_get_contents($json_path);
      $parsed_json = json_decode($json_datas, true);
      $nb_json_objects = count($parsed_json);
      $all_images = [];
      for($i = 0; $i < $nb_json_objects; $i++){
         if(isset($parsed_json[$i]['file'])){
            for($c = 0; $c < count($parsed_json[$i]['file']); $c++){
               $all_images[] = '<img src="'.$parsed_json[$i]['file'][$c].'" class="galery-img">';
            }
         }
      }
      $result = array_unique($all_images);      
      return $result;
   }
}
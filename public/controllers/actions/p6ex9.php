<?php

$civilite = isset($_POST["civilite"]) && !empty($_POST["civilite"]) ? $_POST["civilite"] : "";
$lastname = isset($_POST["lastname"]) && !empty($_POST["lastname"]) ? $_POST["lastname"] : "";
$firstname = isset($_POST["firstname"]) && !empty($_POST["firstname"]) ? $_POST["firstname"] : "";
$birthday = isset($_POST["birthday"]) && !empty($_POST["birthday"]) ? $_POST["birthday"] : "";
$avatar = isset($_FILES["avatar"]) && !empty($_FILES["avatar"]) ? $_FILES["avatar"] : "";

if(
   !empty($civilite)
   && !empty($lastname)
   && !empty($firstname)
   && !empty($birthday)
   && !empty($_FILES)
){
   $img_dir = "$root/public/upload/images/";
   $avatar_file = $img_dir . basename($avatar["name"]);
   $avatar_type = strtolower(pathinfo($avatar_file,PATHINFO_EXTENSION));
   $uploadState = 1;

   if (file_exists($avatar_file)) {
      echo "Le fichier existe déjà.";
      $uploadOk = 0;
   }
   if (move_uploaded_file($avatar["tmp_name"], $avatar_file) && $uploadState === 1) {
      echo "The file ". htmlspecialchars( basename( $avatar["name"])). " has been uploaded.";
      $datas_dir = "$root/public/upload/data/";
      $data_file = "p6ex9.txt";
      $profile_datas = [
         "civilite" => $civilite,
         "lastname" => $lastname,
         "firstname" => $firstname,
         "birthday" => $birthday
      ];
      //MAKE DB LATE
      header("Location:?part=partie6&page=exercice9&userpage=profilep6ex9");
    } else {
      echo "Sorry, there was an error uploading your file.";
      sleep(3000);
      header("Location:?part=partie6&page=exercice9");
    }
}
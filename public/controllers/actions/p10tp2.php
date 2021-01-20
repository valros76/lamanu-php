<?php
$civilite = isset($_POST["civilite"]) && !empty($_POST["civilite"]) ? validData($_POST["civilite"]) : "";
$firstname = isset($_POST["firstname"]) && !empty($_POST["firstname"]) ? validData($_POST["firstname"]) : "";
$birthday = isset($_POST["birthday"]) && !empty($_POST["birthday"]) ? validData($_POST["birthday"]) : "";
$state = isset($_POST["state"]) && !empty($_POST["state"]) ? validData($_POST["state"]) : "";
$nationality = isset($_POST["nationality"]) && !empty($_POST["nationality"]) ? validData($_POST["nationality"]) : "";
$adress = isset($_POST["adress"]) && !empty($_POST["adress"]) ? validData($_POST["adress"]) : "";
$cp = isset($_POST["cp"]) && !empty($_POST["cp"]) ? validData($_POST["cp"]) : "";
$city = isset($_POST["city"]) && !empty($_POST["city"]) ? validData($_POST["city"]) : "";
$email = isset($_POST["email"]) && !empty($_POST["email"]) ? validData($_POST["email"]) : "";
$phone = isset($_POST["phone"]) && !empty($_POST["phone"]) ? validData($_POST["phone"]) : "";
$diploma = isset($_POST["diploma"]) && !empty($_POST["diploma"]) ? validData($_POST["diploma"]) : "";
$pole_emploi_id = isset($_POST["pole_emploi_id"]) && !empty($_POST["pole_emploi_id"]) ? validData($_POST["pole_emploi_id"]) : "";
$nb_badges = isset($_POST["nb_badges"]) && !empty($_POST["nb_badges"]) ? validData($_POST["nb_badges"]) : "";
$codeacademy_links = isset($_POST["codeacademy_links"]) && !empty($_POST["codeacademy_links"]) ? validData($_POST["codeacademy_links"]) : "";
$marvel = isset($_POST["marvel"]) && !empty($_POST["marvel"]) ? validData($_POST["marvel"]) : "";
$hacks = isset($_POST["hacks"]) && !empty($_POST["hacks"]) ? validData($_POST["hacks"]) : "";
$xp = isset($_POST["xp"]) && !empty($_POST["xp"]) ? validData($_POST["xp"]) : "";

// foreach (get_defined_vars() as $key => $var) {
//    echo '<p>' . $key . ' : ' . $var . '</p>';
// }

if (!empty($civilite) && !empty($firstname) && !empty($birthday) && !empty($state) && !empty($nationality) && !empty($adress) && !empty($cp) && !empty($city)  && !empty($email) && !empty($phone) && !empty($diploma) && !empty($pole_emploi_id) && !empty($nb_badges) && !empty($codeacademy_links) && !empty($marvel) && !empty($hacks)  && !empty($xp)) {
   $regStrings = '/^[A-Z][A-Za-z\à\á\â\ä\ç\è\é\ê\ë\ì\í\î\ï\ñ\ò\ó\ô\ö\ù\ú\û\ü\-]+$/';
   $regAdress = '/^[A-Z][A-Za-z\à\á\â\ä\ç\è\é\ê\ë\ì\í\î\ï\ñ\ò\ó\ô\ö\ù\ú\û\ü\-][0-9]{5}+$/';
   $regEmail = '/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/';
   $regPhone = '/^([0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2})|((0|\+33)[1-9]( *[0-9]{2}){4})$/';
   $regCP = '/^[0-9]{5}$/';
   $regDiploma = '/^[A-Z][A-Za-z0-9\-\_]+$/';
   $regPoleEmploi = '/^[A-Za-z0-9]{8,12}$/';
   $regUrl = '_^(?:(?:https?|ftp)://)(?:\S+(?::\S*)?@)?(?:(?!10(?:\.\d{1,3}){3})(?!127(?:\.\d{1,3}){3})(?!169\.254(?:\.\d{1,3}){2})(?!192\.168(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\x{00a1}-\x{ffff}0-9]+-?)*[a-z\x{00a1}-\x{ffff}0-9]+)(?:\.(?:[a-z\x{00a1}-\x{ffff}0-9]+-?)*[a-z\x{00a1}-\x{ffff}0-9]+)*(?:\.(?:[a-z\x{00a1}-\x{ffff}]{2,})))(?::\d{2,5})?(?:/[^\s]*)?$_iuS';
   list($dd, $mm, $yyyy) = explode('-', $birthday);

   echo '<hr width="100%"/>';
   echo '<p>Civilité : ' . strtoupper($civilite) . '</p>';
   if (!preg_match($regStrings, strtolower($firstname))) {
      echo '<p>Prénom : ' . $firstname . '</p>';
   } else {
      echo "<p>Erreur sur le prénom.</p>";
   }
   if (!checkdate($yyyy, $mm, $dd)) {
      echo '<p>Erreur sur la date de naissance.</p>';
   } else {
      echo '<p>Date de naissance : ' . $birthday . '</p>';
   }
   if (!preg_match($regStrings, strtolower($state))) {
      echo '<p>Pays de naissance : ' . $state . '</p>';
   } else {
      echo "<p>Erreur sur le pays de naissance.</p>";
   }
   if (!preg_match($regStrings, strtolower($nationality))) {
      echo '<p>Nationalité : ' . $nationality . '</p>';
   } else {
      echo "<p>Erreur sur la nationnalité.</p>";
   }
   if (!preg_match($regStrings, strtolower($adress))) {
      echo '<p>Adresse : ' . $adress . '</p>';
   } else {
      echo "<p>Erreur sur l'adresse.</p>";
   }
   if (!preg_match($regCP, $cp)) {
      echo '<p>Code postal : ' . $cp . '</p>';
   } else {
      echo "<p>Erreur sur le code postal.</p>";
   }
   if (!preg_match($regStrings, strtolower($city))) {
      echo '<p>Ville : ' . $city . '</p>';
   } else {
      echo "<p>Erreur sur la ville.</p>";
   }
   if (filter_var(strtolower($email), FILTER_VALIDATE_EMAIL)) {
      echo '<p>Email : ' . $email . '</p>';
   } else {
      echo "<p>Erreur sur l'email.</p>";
   }
   if (!preg_match($regPhone, $phone)) {
      echo '<p>Numéro de téléphone : ' . $phone . '</p>';
   } else {
      echo "<p>Erreur sur le numéro de téléphone.</p>";
   }
   if (!preg_match($regDiploma, strtolower($diploma))) {
      switch ($diploma) {
         case 'bac':
            $diploma = "BAC";
            break;
         case 'bac_1':
            $diploma = "BAC + 1";
            break;
         case 'bac_2':
            $diploma = "BAC + 2";
            break;
         case 'superieur':
            $diploma = "Diplôme supérieur";
            break;
         case 'aucun':
         default:
            $diploma = "Sans diplôme";
      }
      echo '<p>Diplôme : ' . strtolower($diploma) . '</p>';
   } else {
      echo "<p>Erreur sur le diplôme.</p>";
   }
   if (!preg_match($regPoleEmploi, $pole_emploi_id)) {
      echo '<p>Identifiant Pôle Emploi : ' . $pole_emploi_id . '</p>';
   } else {
      echo "<p>Erreur sur l'identifiant Pôle Emploi.</p>";
   }
   if ($nb_badges >= 0 || $nb_badges <= 100) {
      echo '<p>Nombre de badges : ' . $nb_badges . '</p>';
   } else {
      echo "<p>Erreur sur le nombre de badges.</p>";
   }
   if (!preg_match("#^(?:(?:https?|ftp)://)(?:\S+(?::\S*)?@)?(?:(?!10(?:\.\d{1,3}){3})(?!127(?:\.\d{1,3}){3})(?!169\.254(?:\.\d{1,3}){2})(?!192\.168(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\x{00a1}-\x{ffff}0-9]+-?)*[a-z\x{00a1}-\x{ffff}0-9]+)(?:\.(?:[a-z\x{00a1}-\x{ffff}0-9]+-?)*[a-z\x{00a1}-\x{ffff}0-9]+)*(?:\.(?:[a-z\x{00a1}-\x{ffff}]{2,})))(?::\d{2,5})?(?:/[^\s]*)?$#iuS", $codeacademy_links)) {
      $urls = str_replace("http://|https://", " http://| https://", $codeacademy_links);
      $url_links = explode(',', trim($codeacademy_links));
      foreach($url_links as $key => $url){
         $url_links[$key] = str_replace(',', $url_links[$key], $url_links[$key]);
         echo "<p>Liens Codeacademy : $key</p>";
         echo "<p><a href='$url_links[$key]' target='blank' rel='noopener noreferrer'>$url_links[$key]</a></p>";
      }
   } else {
      echo "<p>Erreur sur les liens Code Academy.</p>";
   }
   if (!preg_match($regStrings, $marvel)) {
      echo '<p>Héros : ' . $marvel . '</p>';
   } else {
      echo "<p>Erreur sur la partie héros.</p>";
   }
   if (!preg_match($regStrings, $hacks)) {
      echo '<p>Hacks : ' . $hacks . '</p>';
   } else {
      echo "<p>Erreur sur la partie hacks.</p>";
   }
   if (!preg_match($regStrings, $xp)) {
      echo '<p>Expérience : ' . $xp . '</p>';
   } else {
      echo "<p>Erreur sur la partie expérience.</p>";
   }
   echo '<hr width="100%"/>';
} else {
   echo '<hr width="100%"/>';
   echo '<p>Information manquante.</p>';
   echo '<hr width="100%"/>';
}

function validData($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   $data = nl2br($data);
   return $data;
}

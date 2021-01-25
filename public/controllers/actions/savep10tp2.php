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
   $regStrings = '/^[A-Za-z0-9\à\á\â\ä\ç\è\é\ê\ë\ì\í\î\ï\ñ\ò\ó\ô\ö\ù\ú\û\ü\-\.\_\ \!\?\,\'\s\r\n\b\t\v\f\<\>\(br \/)]+$/';
   $regEmail = '/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/';
   $regPhone = '/^(0|\+33)([0-9]{9,10})$/';
   $regCP = '/^[0-9]{5}$/';
   $regDiploma = '/^[A-Za-z0-9\-\_]+$/';
   $regPoleEmploi = '/^[A-Za-z0-9]{8,12}$/';
   $regUrl = '#^((?:(?:https?|http)://)(?:w{3}|[A-Za-z0-9]+)\.[a-z]{1,12}(?:\ ?|\s?|\,?|\;?|\-?|\_?|\~?|\+?|\/?|\*?|\.?|\:?|\%))+$#iuS';
   $regBirthday = '#^\d{1,2}\/\d{1,2}\/\d{4}$#';
   list($yyyy,$mm,$dd) = explode("-", $birthday);
   $marvel = str_replace('\\r\\n', ' ', $marvel);

   ob_start();
   echo '<hr width="100%"/>
   <article class="main-articles">';
   echo '<p class="valid-para">Civilité : ' . strtoupper($civilite) . '</p>';
   if (!preg_match($regStrings, $firstname)) {
      echo "<p class='error-para'>Erreur sur le prénom.</p>";
   } else {
      echo '<p class="valid-para">Prénom : ' . $firstname . '</p>';
   }
   if (!checkdate($mm,$dd,$yyyy)) {
      echo "<p class='error-para'>Erreur sur la date de naissance.</p>";
   } else {
      echo '<p class="valid-para">Date de naissance : '.$dd.'-'.$mm.'-'.$yyyy.'</p>';
   }
   if (!preg_match($regStrings, $state)) {
      echo "<p class='error-para'>Erreur sur le pays de naissance.</p>";
   } else {
      echo '<p class="valid-para">Pays de naissance : ' . $state . '</p>';
   }
   if (!preg_match($regStrings, $nationality)) {
      echo "<p class='error-para'>Erreur sur la nationnalité.</p>";
   } else {
      echo '<p class="valid-para">Nationalité : ' . $nationality . '</p>';
   }
   if (!preg_match('/^([0-9]+)((,|,\s|\s)([A-Za-z0-9\à\á\â\ä\ç\è\é\ê\ë\ì\í\î\ï\ñ\ò\ó\ô\ö\ù\ú\û\ü\-\_\']+))*$/', $adress)) {
      echo "<p class='error-para'>Erreur sur l'adresse.</p>";
   } else {
      echo '<p class="valid-para">Adresse : ' . $adress . '</p>';
   }
   if (!preg_match($regCP, $cp)) {
      echo "<p class='error-para'>Erreur sur le code postal.</p>";
   } else {
      echo '<p class="valid-para">Code postal : ' . $cp . '</p>';
   }
   if (!preg_match('/^([A-Za-z0-9\à\á\â\ä\ç\è\é\ê\ë\ì\í\î\ï\ñ\ò\ó\ô\ö\ù\ú\û\ü\-\_\']+)*$/', strtolower($city))) {
      echo "<p class='error-para'>Erreur sur la ville.</p>";
   } else {
      echo '<p class="valid-para">Ville : ' . $city . '</p>';
   }
   if (!filter_var(strtolower($email), FILTER_VALIDATE_EMAIL)) {
      echo "<p class='error-para'>Erreur sur l'email.</p>";
   } else {
      echo '<p class="valid-para">Email : ' . $email . '</p>';
   }
   if (!preg_match($regPhone, $phone)) {
      echo "<p class='error-para'>Erreur sur le numéro de téléphone.</p>";
   } else {
      echo '<p class="valid-para">Numéro de téléphone : ' . $phone . '</p>';
   }
   if (!preg_match($regDiploma, strtolower($diploma))) {
      echo "<p class='error-para'>Erreur sur le diplôme.</p>";
   } else {
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
      echo '<p class="valid-para">Diplôme : ' . strtolower($diploma) . '</p>';
   }
   if (!preg_match($regPoleEmploi, $pole_emploi_id)) {
      echo "<p class='error-para'>Erreur sur l'identifiant Pôle Emploi.</p>";
   } else {
      echo '<p class="valid-para">Identifiant Pôle Emploi : ' . $pole_emploi_id . '</p>';
   }
   if ($nb_badges >= 0 || $nb_badges <= 100) {
      echo '<p class="valid-para">Nombre de badges : ' . $nb_badges . '</p>';
   } else {
      echo "<p class='error-para'>Erreur sur le nombre de badges.</p>";
   }
   if (!preg_match($regUrl, $codeacademy_links)) {
      echo "<p class='error-para'>Erreur sur les liens Code Academy.</p>";
   } else {
      $url_links = explode(',', trim($codeacademy_links));
      $url_links = explode(',', trim($codeacademy_links));
      $url_links = explode('-', trim($codeacademy_links));
      $url_links = explode(' ', trim($codeacademy_links));
      foreach($url_links as $key => $url){
         $url_links[$key] = str_replace(',', $url_links[$key], $url_links[$key]);
         echo '<p class="valid-para">Liens Codeacademy : ( id: '.$key.' )<br/><a href='.$url_links[$key].' target="blank" rel="noopener noreferrer">'.$url_links[$key].'</a></p>';
      }

   }
   if (!preg_match($regStrings, $marvel)) {
      echo "<p class='error-para'>Erreur sur la partie héros.</p>";
   } else {
      echo '<p class="valid-para">Héros : ' . $marvel . '</p>';
   }
   if (!preg_match($regStrings, $hacks)) {
      echo "<p class='error-para'>Erreur sur la partie hacks.</p>";
   } else {
      echo '<p class="valid-para">Hacks : ' . $hacks . '</p>';
   }
   if (!preg_match($regStrings, $xp)) {
      echo "<p class='error-para'>Erreur sur la partie expérience.</p>";
   } else {
      echo '<p class="valid-para">Expérience : ' . $xp . '</p>';
   }
   echo '<hr width="100%"/>
   </article>';
   $mainContent = ob_get_clean();
   require_once $_SERVER['DOCUMENT_ROOT'].'/public/templates/default_template.php';
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

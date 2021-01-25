<?php

function validData($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   $data = nl2br($data);
   return $data;
}

function testDatas($civilite,$firstname,$birthday,$state,$nationality,$adress,$cp,$city,$email,$phone,$diploma,$pole_emploi_id,$nb_badges,$codeacademy_links,$marvel,$hacks,$xp)
{
   $return_datas = array();
   $errors_tab = array();
   if (!empty($civilite) && !empty($firstname) && !empty($birthday) && !empty($state) && !empty($nationality) && !empty($adress) && !empty($cp) && !empty($city)  && !empty($email) && !empty($phone) && !empty($diploma) && !empty($pole_emploi_id) && !empty($nb_badges) && !empty($codeacademy_links) && !empty($marvel) && !empty($hacks)  && !empty($xp)) {
      $regStrings = '/^[A-Za-z0-9\à\á\â\ä\ç\è\é\ê\ë\ì\í\î\ï\ñ\ò\ó\ô\ö\ù\ú\û\ü\-\.\_\ \!\?\,\'\s\r\n\b\t\v\f\<\>\(br \/)]+$/';
      $regEmail = '/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/';
      $regPhone = '/^(0|\+33)([0-9]{9,10})$/';
      $regCP = '/^[0-9]{5}$/';
      $regDiploma = '/^[A-Za-z0-9\-\_]+$/';
      $regPoleEmploi = '/^[A-Za-z0-9]{8,12}$/';
      $regUrl = '#^((?:(?:https?|http)://)(?:w{3}|[A-Za-z0-9]+)\.[a-z]{1,12}(?:\ ?|\s?|\,?|\;?|\-?|\_?|\~?|\+?|\/?|\*?|\.?|\:?|\%))+$#iuS';
      $regBirthday = '#^\d{1,2}\/\d{1,2}\/\d{4}$#';
      list($yyyy, $mm, $dd) = explode("-", $birthday);
      $marvel = str_replace('\\r\\n', ' ', $marvel);
      $nb_badges = (int) $nb_badges;
      $return_datas += ['civilite'=>'<p class="valid-para">Civilité : ' . strtoupper($civilite) . '</p>'];
      if (!preg_match($regStrings, $firstname)) {
         $errors_tabs = ['civilite'=>'<p class="error-para">Erreur sur le prénom.</p>'];
      } else {
         $return_datas += ['firstname'=> '<p class="valid-para">Prénom : ' . $firstname . '</p>'];
      }
      if (!checkdate($mm, $dd, $yyyy)) {
         $errors_tabs += ['birthday'=>'<p class="error-para">Erreur sur la date de naissance.</p>'];
      } else {
         $return_datas += ['birthday'=>'<p class="valid-para">Date de naissance : ' . $dd . '-' . $mm . '-' . $yyyy . '</p>'];
      }
      if (!preg_match($regStrings, $state)) {
         $errors_tabs += ['state'=>'<p class="error-para">Erreur sur le pays de naissance.</p>'];
      } else {
         $return_datas += ['state'=>'<p class="valid-para">Pays de naissance : ' . $state . '</p>'];
      }
      if (!preg_match($regStrings, $nationality)) {
         $errors_tabs += ['nationality'=>'<p class="error-para">Erreur sur la nationnalité.</p>'];
      } else {
         $return_datas += ['nationality'=>'<p class="valid-para">Nationalité : ' . $nationality . '</p>'];
      }
      if (!preg_match('/^([0-9]+)((,|,\s|\s)([A-Za-z0-9\à\á\â\ä\ç\è\é\ê\ë\ì\í\î\ï\ñ\ò\ó\ô\ö\ù\ú\û\ü\-\_\']+))*$/', $adress)) {
         $errors_tabs += ['adress'=>'<p class="error-para">Erreur sur l\'adresse.</p>'];
      } else {
         $return_datas += ['adress'=>'<p class="valid-para">Adresse : ' . $adress . '</p>'];
      }
      if (!preg_match($regCP, $cp)) {
         $errors_tab += ['cp'=>'<p class="error-para">Erreur sur le code postal.</p>'];
      } else {
         $return_datas += ['cp'=>'<p class="valid-para">Code postal : ' . $cp . '</p>'];
      }
      if (!preg_match('/^([A-Za-z0-9\à\á\â\ä\ç\è\é\ê\ë\ì\í\î\ï\ñ\ò\ó\ô\ö\ù\ú\û\ü\-\_\']+)*$/', strtolower($city))) {
         $errors_tab += ['city'=>'<p class="error-para">Erreur sur la ville.</p>'];
      } else {
         $return_datas += ['city'=>'<p class="valid-para">Ville : ' . $city . '</p>'];
      }
      if (!filter_var(strtolower($email), FILTER_VALIDATE_EMAIL)) {
         $errors_tab += ['email'=>'<p class="error-para">Erreur sur l\'email.</p>'];
      } else {
         $return_datas += ['email'=>'<p class="valid-para">Email : ' . $email . '</p>'];
      }
      if (!preg_match($regPhone, $phone)) {
         $errors_tab += ['phone'=>'<p class="error-para">Erreur sur le numéro de téléphone.</p>'];
      } else {
         $return_datas += ['phone'=>'<p class="valid-para">Numéro de téléphone : ' . $phone . '</p>'];
      }
      if (!preg_match($regDiploma, strtolower($diploma))) {
         $errors_tab += ['diploma'=>'<p class="error-para">Erreur sur le diplôme.</p>'];
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
         $return_datas += ['diploma'=>'<p class="valid-para">Diplôme : ' . strtolower($diploma) . '</p>'];
      }
      if (!preg_match($regPoleEmploi, $pole_emploi_id)) {
         $errors_tab += ['pole_emploi_id'=>'<p class="error-para">Erreur sur l\'identifiant Pôle Emploi.</p>'];
      } else {
         $return_datas += ['pole_emploi_id'=>'<p class="valid-para">Identifiant Pôle Emploi : ' . $pole_emploi_id . '</p>'];
      }
      if ($nb_badges >= 0 || $nb_badges <= 100) {
         $return_datas += ['nb_badges'=>'<p class="valid-para">Nombre de badges : ' . $nb_badges . '</p>'];
      } else {
         $errors_tab += ['nb_badges'=>'<p class="error-para">Erreur sur le nombre de badges.</p>'];
      }
      if (!preg_match($regUrl, $codeacademy_links)) {
         $errors_tab += ['codeacademy_links'=>'<p class="error-para">Erreur sur les liens Code Academy.</p>'];
      } else {
         $url_links = explode(',', trim($codeacademy_links));
         $url_links = explode(',', trim($codeacademy_links));
         $url_links = explode('-', trim($codeacademy_links));
         $url_links = explode(' ', trim($codeacademy_links));
         foreach ($url_links as $key => $url) {
            $url_links[$key] = str_replace(',', $url_links[$key], $url_links[$key]);
            $return_datas += ['codeacademy_links'=>[$key=>'<p class="valid-para">Liens Codeacademy : ( id: ' . $key . ' )<br/><a href=' . $url_links[$key] . ' target="blank" rel="noopener noreferrer">' . $url_links[$key] . '</a></p>']];
         }
      }
      if (!preg_match($regStrings, $marvel)) {
         $errors_tab += ['marvel'=>'<p class="error-para">Erreur sur la partie héros.</p>'];
      } else {
         $return_datas += ['marvel'=>'<p class="valid-para">Héros : ' . $marvel . '</p>'];
      }
      if (!preg_match($regStrings, $hacks)) {
         $errors_tab += ['marvel'=>'<p class="error-para">Erreur sur la partie hacks.</p>'];
      } else {
         $return_datas += ['hacks'=>'<p class="valid-para">Hacks : ' . $hacks . '</p>'];
      }
      if (!preg_match($regStrings, $xp)) {
         $errors_tab += ['xp'=>'<p class="error-para">Erreur sur la partie expérience.</p>'];
      } else {
         $return_datas += ['xp'=>'<p class="valid-para">Expérience : ' . $xp . '</p>'];
      }
   } else {
      var_dump($errors_tab);
   }
   if(!empty($errors_tab)){
      // echo json_encode($errors_tab);
      echo "";
   }else{
      echo json_encode($return_datas);
   }
}

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

testDatas($civilite,$firstname,$birthday,$state,$nationality,$adress,$cp,$city,$email,$phone,$diploma,$pole_emploi_id,$nb_badges,$codeacademy_links,$marvel,$hacks,$xp);
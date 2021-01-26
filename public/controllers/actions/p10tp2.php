<?php

function testDatas($civilite, $firstname, $birthday, $state, $nationality, $adress, $cp, $city, $email, $phone, $diploma, $pole_emploi_id, $nb_badges, $codeacademy_links, $marvel, $hacks, $xp)
{
   $return_datas = array();
   $errors_tab = array();
   if (!empty($civilite) && !empty($firstname) && !empty($birthday) && !empty($state) && !empty($nationality) && !empty($adress) && !empty($cp) && !empty($city)  && !empty($email) && !empty($phone) && !empty($diploma) && !empty($pole_emploi_id) && !empty($nb_badges) && !empty($codeacademy_links) && !empty($marvel) && !empty($hacks)  && !empty($xp)) {
      list($yyyy, $mm, $dd) = explode("-", $birthday);
      $marvel = str_replace('\\r\\n', ' ', $marvel);
      $nb_badges = (int) $nb_badges;
      $return_datas += ['civilite' => '<p class="valid-para">Civilité : ' . strtoupper($civilite) . '</p>'];
      if (!preg_match(REGEX_STRINGS, $firstname)) {
         $errors_tabs = ['firstname' => '<p class="error-para">Erreur sur le prénom.</p>'];
         throw new Exception('Erreur sur le prénom');
      } else {
         $return_datas += ['firstname' => '<p class="valid-para">Prénom : ' . $firstname . '</p>'];
      }
      if (!checkdate($mm, $dd, $yyyy)) {
         $errors_tabs += ['birthday' => '<p class="error-para">Erreur sur la date de naissance.</p>'];
         throw new Exception('Erreur sur la date de naissance');
      } else {
         if($yyyy >= 1970 && $yyyy <= 2005){
            $return_datas += ['birthday' => '<p class="valid-para">Date de naissance : ' . $dd . '-' . $mm . '-' . $yyyy . '</p>'];
         }else{
            $errors_tabs += ['birthday' => '<p class="error-para">Erreur sur la date de naissance.</p>'];
            throw new Exception('Erreur sur la date de naissance');
         }
      }
      if (!preg_match(REGEX_STRINGS, $state)) {
         $errors_tabs += ['state' => '<p class="error-para">Erreur sur le pays de naissance.</p>'];
         throw new Exception('Erreur sur le pays');
      } else {
         $return_datas += ['state' => '<p class="valid-para">Pays de naissance : ' . $state . '</p>'];
      }
      if (!preg_match(REGEX_STRINGS, $nationality)) {
         $errors_tabs += ['nationality' => '<p class="error-para">Erreur sur la nationnalité.</p>'];
         throw new Exception('Erreur sur la nationalité');
      } else {
         $return_datas += ['nationality' => '<p class="valid-para">Nationalité : ' . $nationality . '</p>'];
      }
      if (!preg_match(REGEX_ADRESS, $adress)) {
         $errors_tabs += ['adress' => '<p class="error-para">Erreur sur l\'adresse.</p>'];
         throw new Exception('Erreur sur l\'adresse');
      } else {
         $return_datas += ['adress' => '<p class="valid-para">Adresse : ' . $adress . '</p>'];
      }
      if (!preg_match(REGEX_CP, $cp)) {
         $errors_tab += ['cp' => '<p class="error-para">Erreur sur le code postal.</p>'];
         throw new Exception('Erreur sur le code postal');
      } else {
         $return_datas += ['cp' => '<p class="valid-para">Code postal : ' . $cp . '</p>'];
      }
      if (!preg_match(REGEX_CITY, strtolower($city))) {
         $errors_tab += ['city' => '<p class="error-para">Erreur sur la ville.</p>'];
         throw new Exception('Erreur sur la ville');
      } else {
         $return_datas += ['city' => '<p class="valid-para">Ville : ' . $city . '</p>'];
      }
      if (!filter_var(strtolower($email), FILTER_VALIDATE_EMAIL)) {
         $errors_tab += ['email' => '<p class="error-para">Erreur sur l\'email.</p>'];
         throw new Exception('Erreur sur l\'email');
      } else {
         $return_datas += ['email' => '<p class="valid-para">Email : ' . $email . '</p>'];
      }
      if (!preg_match(REGEX_PHONE, $phone)) {
         $errors_tab += ['phone' => '<p class="error-para">Erreur sur le numéro de téléphone.</p>'];
         throw new Exception('Erreur sur le numéro de téléphone');
      } else {
         $return_datas += ['phone' => '<p class="valid-para">Numéro de téléphone : ' . $phone . '</p>'];
      }
      if (!preg_match(REGEX_DIPLOMA, strtolower($diploma))) {
         $errors_tab += ['diploma' => '<p class="error-para">Erreur sur le diplôme.</p>'];
         throw new Exception('Erreur sur le diplôme');
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
         $return_datas += ['diploma' => '<p class="valid-para">Diplôme : ' . strtolower($diploma) . '</p>'];
      }
      if (!preg_match(REGEX_POLE_EMPLOI, $pole_emploi_id)) {
         $errors_tab += ['pole_emploi_id' => '<p class="error-para">Erreur sur l\'identifiant Pôle Emploi.</p>'];
         throw new Exception('Erreur sur l\'identifiant pôle emploi');
      } else {
         $return_datas += ['pole_emploi_id' => '<p class="valid-para">Identifiant Pôle Emploi : ' . $pole_emploi_id . '</p>'];
      }
      if ($nb_badges >= 0 && $nb_badges <= 100) {
         $return_datas += ['nb_badges' => '<p class="valid-para">Nombre de badges : ' . $nb_badges . '</p>'];
      } else {
         $errors_tab += ['nb_badges' => '<p class="error-para">Erreur sur le nombre de badges.</p>'];
         throw new Exception('Erreur sur le nombre de badges');
      }
      if (!preg_match(REGEX_URL, $codeacademy_links)) {
         $errors_tab += ['codeacademy_links' => '<p class="error-para">Erreur sur les liens Code Academy.</p>'];
         throw new Exception('Erreur sur les liens codeacademy');
      } else {
         $codeacademy_links = preg_replace('/\s\s+/', ' ', $codeacademy_links);
         $codeacademy_links = str_replace('-', ' ', $codeacademy_links);
         $codeacademy_links = str_replace(' ', ' ', $codeacademy_links);
         $url_links = explode(' ', trim($codeacademy_links));
         foreach ($url_links as $key => $url) {
            // $url_links[$key] = str_replace(',', $url_links[$key], $url_links[$key]);
            $content = '<p class="valid-para">Liens Codeacademy : ( id: ' . $key . ' )<br/><a href=' . $url . ' target="blank" rel="noopener noreferrer">' . $url_links[$key] . '</a></p>';
            if(!isset($return_datas['codeacademy_links'])){
               $return_datas += ['codeacademy_links' => [$url_links[$key] => $content]];
            }else{
               $return_datas['codeacademy_links'] += [$url_links[$key] => $content];
            }
         }
      }
      if (!preg_match(REGEX_STRINGS, $marvel)) {
         $errors_tab += ['marvel' => '<p class="error-para">Erreur sur la partie héros.</p>'];
         throw new Exception('Erreur sur le marvel');
      } else {
         $return_datas += ['marvel' => '<p class="valid-para">Héros : ' . $marvel . '</p>'];
      }
      if (!preg_match(REGEX_STRINGS, $hacks)) {
         $errors_tab += ['hacks' => '<p class="error-para">Erreur sur la partie hacks.</p>'];
         throw new Exception('Erreur sur le hacks');
      } else {
         $return_datas += ['hacks' => '<p class="valid-para">Hacks : ' . $hacks . '</p>'];
      }
      if (!preg_match(REGEX_STRINGS, $xp)) {
         $errors_tab += ['xp' => '<p class="error-para">Erreur sur la partie expérience.</p>'];
         throw new Exception('Erreur sur l\'xp');
      } else {
         $return_datas += ['xp' => '<p class="valid-para">Expérience : ' . $xp . '</p>'];
      }
   } else {
      var_dump($errors_tab);
   }
   if (!empty($errors_tab)) {
      // echo json_encode($errors_tab);
      echo "";
   } else {
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

try {
   testDatas($civilite, $firstname, $birthday, $state, $nationality, $adress, $cp, $city, $email, $phone, $diploma, $pole_emploi_id, $nb_badges, $codeacademy_links, $marvel, $hacks, $xp);
} catch (Exception $e) {
   echo 'Exception reçue : ',  $e->getMessage(), "\n";
}

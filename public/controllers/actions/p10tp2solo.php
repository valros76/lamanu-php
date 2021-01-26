<?php

function validCivilite($civilite)
{
   $civilite = strtoupper($civilite);
   if (!preg_match(REGEX_CIVILITE, $civilite)) {
      echo "";
   } else {
      echo json_encode(["verification" => $civilite]);
   }
}
function validFirstname($firstname)
{
   if (!preg_match(REGEX_FIRSTNAME, $firstname)) {
      echo "";
   } else {
      echo json_encode(["verification" => $firstname]);
   }
}
function validBirthday($birthday)
{
   list($yyyy, $mm, $dd) = explode("-", $birthday);
   if (!checkdate($mm, $dd, $yyyy)) {
      echo "";
   } else {
      if($yyyy >= 1970 && $yyyy <= 2005){
         echo json_encode(["verification" => $birthday]);
      }else{
         echo "";
      }
   }
}
function validState($state)
{
   if (!preg_match(REGEX_STRINGS, $state)) {
      echo "";
   } else {
      echo json_encode(["verification" => $state]);
   }
}
function validNationality($nationality)
{
   if (!preg_match(REGEX_STRINGS, $nationality)) {
      echo "";
   } else {
      echo json_encode(["verification" => $nationality]);
   }
}
function validAdress($adress)
{
   if (!preg_match(REGEX_ADRESS, $adress)) {
      echo "";
   } else {
      echo json_encode(["verification" => $adress]);
   }
}
function validCp($cp)
{
   if (!preg_match(REGEX_CP, $cp)) {
      echo "";
   } else {
      echo json_encode(["verification" => $cp]);
   }
}
function validCity($city)
{
   if (!preg_match(REGEX_CITY, strtolower($city))) {
      echo "";
   } else {
      echo json_encode(["verification" => $city]);
   }
}
function validEmail($email)
{
   if (!filter_var(strtolower($email), FILTER_VALIDATE_EMAIL)) {
      echo "";
   } else {
      echo json_encode(["verification" => $email]);
   }
}
function validPhone($phone)
{
   if (!preg_match(REGEX_PHONE, $phone)) {
      echo "";
   } else {
      echo json_encode(["verification" => $phone]);
   }
}
function validDiploma($diploma)
{
   if (!preg_match(REGEX_DIPLOMA, strtolower($diploma))) {
      echo "";
   } else {
      echo json_encode(["verification" => $diploma]);
   }
}
function validPoleEmploiId($pole_emploi_id)
{
   if (!preg_match(REGEX_POLE_EMPLOI, $pole_emploi_id)) {
      echo "";
   } else {
      echo json_encode(["verification" => $pole_emploi_id]);
   }
}
function validNbBadges($nb_badges)
{
   $nb_badges = (int) $nb_badges;
   if ($nb_badges >= 0 && $nb_badges <= 100) {
      echo json_encode(["verification" => $nb_badges]);
   } else {
      echo "";
   }
}
function validCodeAcademyLinks($codeacademy_links)
{
   if (!preg_match(REGEX_URL, $codeacademy_links)) {
      echo "";
   } else {
      echo json_encode(["verification" => $codeacademy_links]);
   }
}
function validMarvel($marvel)
{
   $marvel = str_replace('\\r\\n', ' ', $marvel);
   if (!preg_match(REGEX_STRINGS, $marvel)) {
      echo "";
   } else {
      echo json_encode(["verification" => $marvel]);
   }
}
function validHacks($hacks)
{
   if (!preg_match(REGEX_STRINGS, $hacks)) {
      echo "";
   } else {
      echo json_encode(["verification" => $hacks]);
   }
}
function validXp($xp)
{
   if (!preg_match(REGEX_STRINGS, $xp)) {
      echo "";
   } else {
      echo json_encode(["verification" => $xp]);
   }
}

function launchValidation($data,$type)
{
   $func_launch = 'valid' . ucfirst($data) . '(' . $data . ')';
   switch ($type) {
      case 'civilite':
         validCivilite($data);
         break;
      case 'firstname':
         validFirstname($data);
         break;
      case 'birthday':
         validBirthday($data);
         break;
      case 'state':
         validState($data);
         break;
      case 'nationality':
         validNationality($data);
         break;
      case 'adress':
         validAdress($data);
         break;
      case 'cp':
         validCp($data);
         break;
      case 'city':
         validCity($data);
         break;
      case 'email':
         validEmail($data);
         break;
      case 'phone':
         validPhone($data);
         break;
      case 'diploma':
         validDiploma($data);
         break;
      case 'pole_emploi_id':
         validPoleEmploiId($data);
         break;
      case 'nb_badges':
         validNbBadges($data);
         break;
      case 'codeacademy_links':
         validCodeAcademyLinks($data);
         break;
      case 'marvel':
         validMarvel($data);
         break;
      case 'hacks':
         validHacks($data);
         break;
      case 'xp':
         validXp($data);
         break;
      default:
         echo "";
         // echo json_encode(["error"=>"La validation ne peut pas se lancer !"]);
   }
   // echo json_encode(["validation" => $data]);
}

if (isset($_GET["verif_form"]) && !empty($_GET["verif_form"])) {
   $type = validData($_GET['verif_form']);
   $data = $_POST[$type];
   launchValidation($data,$type);
}

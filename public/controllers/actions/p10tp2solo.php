<?php

function validCivilite($civilite){
   $civilite = strtoupper($civilite);
   if(!preg_match(REGEX_CIVILITE, $civilite)){
      return false;
   }else{
      return true;
   }
}
function validFirstname($firstname){
   if (!preg_match(REGEX_STRINGS, $firstname)) {
      return false;
   } else {
      return true;
   }
}
function validBirthday($birthday){
   list($yyyy, $mm, $dd) = explode("-", $birthday);
   if (!checkdate($mm, $dd, $yyyy)) {
      return false;
   } else {
      return true;
   }
}
function validState($state){
   if (!preg_match(REGEX_STRINGS, $state)) {
      return false;
   } else {
      return true;
   }
}
function validNationality($nationality){
   if (!preg_match(REGEX_STRINGS, $nationality)) {
      return false;
   } else {
      return true;
   }
}
function validAdress($adress){
   if (!preg_match(REGEX_ADRESS, $adress)) {
      return false;
   } else {
      return true;
   }
}
function validCp($cp){
   if (!preg_match(REGEX_CP, $cp)) {
      return false;
   } else {
      return true;
   }
}
function validCity($city){
   if (!preg_match(REGEX_CITY,strtolower($city))) {
      return false;
   } else {
      return true;
   }
}
function validEmail($email){
   if (!filter_var(strtolower($email), FILTER_VALIDATE_EMAIL)) {
      return false;
   } else {
      return true;
   }
}
function validPhone($phone){
   if (!preg_match(REGEX_PHONE, $phone)) {
      return false;
   } else {
      return true;
   }
}
function validDiploma($diploma){
   if (!preg_match(REGEX_DIPLOMA, strtolower($diploma))) {
      return false;
   } else {
      return true;
   }
}
function validPoleEmploiId($pole_emploi_id){
   if (!preg_match(REGEX_POLE_EMPLOI, $pole_emploi_id)) {
      return false;
   } else {
      return true;
   }
}
function validNbBadges($nb_badges){
   $nb_badges = (int) $nb_badges;
   if ($nb_badges >= 0 || $nb_badges <= 100) {
      return true;
   } else {
      return false;
   }
}
function validCodeAcademyLinks($codeacademy_links){
   if (!preg_match(REGEX_URL, $codeacademy_links)) {
      return false;
   } else {
      return true;
   }
}
function validMarvel($marvel){
   $marvel = str_replace('\\r\\n', ' ', $marvel);
   if (!preg_match(REGEX_STRINGS, $marvel)) {
      return false;
   } else {
      return true;
   }
}
function validHacks($hacks){
   if (!preg_match(REGEX_STRINGS, $hacks)) {
      return false;
   } else {
      return true;
   }
}
function validXp($xp){
   if (!preg_match(REGEX_STRINGS, $xp)) {
      return false;
   } else {
      return true;
   }
}

function launchValidation($type, $data){
   $func_launch = 'valid'.ucfirst($type).'('.$data.')';
   $func_launch;
   echo json_encode(["validation"=>"launch"]);
}

if(isset($_POST["type"]) && !empty($_POST["type"]) && isset($_POST["data"]) && !empty($_POST["data"])){
   launchValidation(validData($_POST["type"]), validData($_POST["data"]));
}
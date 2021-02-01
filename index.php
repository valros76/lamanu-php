<?php
if(session_status() == PHP_SESSION_NONE){
   session_start();
}
$_SESSION['debug'] = false;
$root = $_SERVER["DOCUMENT_ROOT"];
function loadClass($class){
   require $root.'public/models/'.ucfirst($class).'.php';
}
spl_autoload_register('loadClass');
require "public/utils/valid_data.php";
require "public/utils/regex.php";
require "public/utils/resizeImg.php";
require_once "public/controllers/router.php";


$part = isset($_GET["part"]) && !empty($_GET["part"]) ? htmlspecialchars($_GET["part"]) : "";
$page = isset($_GET["page"]) && !empty($_GET["page"]) ? htmlspecialchars($_GET["page"]) : "";
$otherpage = isset($_GET["otherpage"]) && !empty($_GET["otherpage"]) ? htmlspecialchars($_GET["otherpage"]) : "";
$userpage = isset($_GET["userpage"]) && !empty($_GET["userpage"]) ? htmlspecialchars($_GET["userpage"]) : "";
$submit_form = isset($_GET["submit_form"]) && !empty($_GET["submit_form"]) ? htmlspecialchars($_GET["submit_form"]) : "";
$verif_form = isset($_GET["verif_form"]) && !empty($_GET["verif_form"]) ? htmlspecialchars($_GET["verif_form"]) : "";

if (!empty($part) && !empty($page) && empty($userpage) && empty($submit_form) && empty($otherpage)) {
   try{
      loadExercice($part,$page);
   }catch(Exception $e){
      loadErrorPage("404");
   }
}else if(!empty($part) && empty($page) && empty($submit_form) && empty($otherpage)){
   loadErrorPage("404");
}else if(!empty($part) && !empty($page) && !empty($userpage) && empty($submit_form) && empty($otherpage)){
   try{
      loadUserPage($part,$page,$userpage);
   }catch(Exception $e){
      loadErrorPage("404");
   }
}else if(!empty($part) && !empty($page) && !empty($otherpage)){
   try{
      loadOtherPage($part,$page,$otherpage);
   }catch(Exception $e){
      loadErrorPage("404");
   }
}else if(!empty($submit_form)){
   launchAction($submit_form);
}else if(!empty($verif_form)){
   ajaxRequest($verif_form);
}else {
   loadPage("home");
}

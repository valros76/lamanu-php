<?php


$root = $_SERVER["DOCUMENT_ROOT"];
require_once "public/controllers/router.php";

$part = isset($_GET["part"]) && !empty($_GET["part"]) ? htmlspecialchars($_GET["part"]) : "";
$page = isset($_GET["page"]) && !empty($_GET["page"]) ? htmlspecialchars($_GET["page"]) : "";
$userpage = isset($_GET["userpage"]) && !empty($_GET["userpage"]) ? htmlspecialchars($_GET["userpage"]) : "";
$submit_form = isset($_GET["submit_form"]) && !empty($_GET["submit_form"]) ? htmlspecialchars($_GET["submit_form"]) : "";
$submit_form_temp = isset($_GET["submit_form_temp"]) && !empty($_GET["submit_form_temp"]) ? htmlspecialchars($_GET["submit_form_temp"]) : "";

if (!empty($part) && !empty($page) && empty($userpage) && empty($submit_form)) {
   try{
      loadExercice($part,$page);
   }catch(Exception $e){
      loadErrorPage("404");
   }
}else if(!empty($part) && empty($page) && empty($submit_form)){
   loadErrorPage("404");
}else if(!empty($part) && !empty($page) && !empty($userpage) && empty($submit_form)){
   try{
      loadUserPage($part,$page,$userpage);
   }catch(Exception $e){
      loadErrorPage("404");
   }
}else if(!empty($submit_form)){
   launchAction($submit_form);
}else {
   loadPage("home");
}

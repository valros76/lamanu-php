<?php
if(session_status() == PHP_SESSION_NONE){
   session_start();
}
$root = $_SERVER["DOCUMENT_ROOT"];
require_once "public/controllers/router.php";

$part = isset($_GET["part"]) && !empty($_GET["part"]) ? htmlspecialchars($_GET["part"]) : "";
$page = isset($_GET["page"]) && !empty($_GET["page"]) ? htmlspecialchars($_GET["page"]) : "";
$otherpage = isset($_GET["otherpage"]) && !empty($_GET["otherpage"]) ? htmlspecialchars($_GET["otherpage"]) : "";
$userpage = isset($_GET["userpage"]) && !empty($_GET["userpage"]) ? htmlspecialchars($_GET["userpage"]) : "";
$submit_form = isset($_GET["submit_form"]) && !empty($_GET["submit_form"]) ? htmlspecialchars($_GET["submit_form"]) : "";

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
}else {
   loadPage("home");
}

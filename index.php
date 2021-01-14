<?php


$root = $_SERVER["DOCUMENT_ROOT"];
require_once "public/controllers/router.php";

$part = isset($_GET["part"]) && !empty($_GET["part"]) ? htmlspecialchars($_GET["part"]) : "";
$page = isset($_GET["page"]) && !empty($_GET["page"]) ? htmlspecialchars($_GET["page"]) : "";

if (!empty($part) && !empty($page)) {
   try{
      loadExercice($part,$page);
   }catch(Exception $e){
      loadErrorPage("404");
   }
}else if(!empty($part) && empty($page)){
   loadErrorPage("404");
} else {
   loadPage("home");
}

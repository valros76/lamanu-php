<?php


$root = $_SERVER["DOCUMENT_ROOT"];
require_once "public/controllers/router.php";

$page = isset($_GET["page"]) && !empty($_GET["page"]) ? htmlspecialchars($_GET["page"]) : "";

if (!empty($page)) {
   try{
      loadPage($page);
   }catch(Exception $e){
      loadErrorPage("404");
   }
} else {
   loadPage("home");
}

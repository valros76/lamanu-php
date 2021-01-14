<?php

function loadPage($page)
{
   global $root;
   $page_path = $root . "/public/views/" . $page . "/" . $page . ".php";
   switch ($page) {
      case "home":
         require $root . "/public/views/home.php";
         break;
      case "exercice1":
      case "exercice2":
      case "exercice3":
      case "exercice4":
      case "exercice5":
      case "exercice6":
      case "exercice7":
      case "exercice8":
         require $page_path;
         break;
      default:
         loadErrorPage("404");
   }
}

function loadExercice($part,$page){
   global $root;
   $exercice = $root . "/public/views/" . $part . "/" . $page . "/" . $page . ".php";
   switch ($page) {
      case "exercice1":
      case "exercice2":
      case "exercice3":
      case "exercice4":
      case "exercice5":
      case "exercice6":
      case "exercice7":
      case "exercice8":
         require $exercice;
         break;
      default:
         loadErrorPage("404");
   }
}

function loadErrorPage($err_page)
{
   global $root;
   switch ($err_page) {
      case "404":
      default:
         require $root . "/public/views/errors/404.php";
   }
}

<?php

function loadPage($page)
{
   global $root;
   $page_path = $root . "/public/views/" . $page . "/" . $page . ".php";
   switch ($page) {
      case "home":
         require $root . "/public/views/home.php";
         break;
      default:
         loadErrorPage("404");
   }
}

function loadExercice($part, $page)
{
   global $root;
   $exercice = $root . "/public/views/" . $part . "/" . $page . "/" . $page . ".php";
   $exists_page = file_exists($exercice);
   switch ($page) {
      case "exercice1":
      case "exercice2":
      case "exercice3":
      case "exercice4":
      case "exercice5":
      case "exercice6":
      case "exercice7":
      case "exercice8":
      case "exercice9":
      case "exercice10":
      case "tp":
      case "tp1":
      case "tp2":
      case 'galery':
         if ($exists_page) {
            require $exercice;
         } else {
            loadErrorPage("404");
         }
         break;
      default:
         loadErrorPage("404");
   }
}

function loadUserPage($part, $page, $userpage = null)
{
   global $root;
   if (!isset($userpage) || empty($userpage) && $userpage != "profile") {
      $userpage = $root . "/public/views/" . $part . "/" . $page . "/user.php";
      $exists_page = file_exists($userpage);
      switch ($page) {
         case "exercice1":
         case "exercice2":
         case "exercice3":
         case "exercice4":
         case "exercice5":
         case "exercice6":
         case "exercice7":
         case "exercice8":
         case "exercice9":
         case "exercice10":
         case "tp":
         case "tp1":
         case "tp2":
         case 'galery':
            if ($exists_page) {
               require $userpage;
            } else {
               loadErrorPage("404");
            }
            break;
         default:
            loadErrorPage("404");
      }
   } else {
      $profile_page = $root . "/public/views/" . $part . "/" . $page . "/" . $userpage . ".php";
      $exists_page = file_exists($profile_page);
      switch ($userpage) {
         case "profilep6ex9":
            if ($exists_page) {
               require $profile_page;
            } else {
               loadErrorPage("404");
            }
            break;
         default:
            loadErrorPage("404");
      }
   }
}

function loadOtherPage($part, $page, $otherpage)
{
   global $root;
   $page_path = $root . "/public/views/" . $part . "/" . $page . "/" . $otherpage . ".php";
   switch ($otherpage) {
      case "page2":
         require $page_path;
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

function launchAction($action)
{
   global $root;
   switch ($action) {
      case "p6ex9":
         require $root . "/public/controllers/actions/p6ex9.php";
         break;
      case "p10tp2":
         require $root . "/public/controllers/actions/p10tp2.php";
         break;
      case "p10tp2solo":
         require $root . "/public/controllers/actions/p10tp2solo.php";
         break;
      case "galery":
         require $root . "/public/controllers/actions/galery.php";
         break;
      default:
         loadErrorPage("404");
   }
}

function ajaxRequest($req)
{
   global $root;
   switch (true) {
      case $req:
         require $root . "/public/controllers/actions/p10tp2solo.php";
         break;
      default:
         loadErrorPage("404");
   }
}

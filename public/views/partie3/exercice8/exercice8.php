<?php
include $root . "public/includes/partie3/include_exercice8.php";
$pageTitle = "Exercice 8 - P3 - PHP";
$headTitle = "Exercice 8 - P3";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      En allant de 0 à 100 avec un pas de 1, afficher tous ceux qui ne sont pas multiple de 3.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
         for($count;$count<=100;$count++){
            if($count%3){
               echo $count."<br/>";
            }
         }
      ;?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";; ?>
<?php
include $root . "public/includes/partie5/include_exercice8.php";
$pageTitle = "Exercice 8 - P5 - PHP";
$headTitle = "Exercice 8 - P5";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
         foreach($departements as $dep => $dep_name){
            echo "<p>".$dep." : ".$dep_name."</p>";
         }
      ;?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";; ?>
<?php
include $root . "public/includes/partie4/include_exercice9.php";
$pageTitle = "Exercice 9 - P4 - PHP";
$headTitle = "Exercice 9 - P4";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
   Faire une fonction qui prend deux paramètres : nombre 1 et nombre 2.<br/>
   Elle doit renvoyer le plus grand des deux.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
         var_dump(returnBiggest(12,25));
         echo "<p>Bonus - fonction qui retourne le plus grand nombre et qui prends des paramètres aléatoires (typés int) : ".returnBiggestAlea(1,2,3,4,5,6,7,8,9,10)."</p>"
      ;?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";; ?>
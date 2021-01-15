<?php
include $root . "public/includes/partie5/include_exercice7.php";
$pageTitle = "Exercice 7 - P5 - PHP";
$headTitle = "Exercice 7 - P5";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
         $departements += [51 => "Marne"];
         var_dump($departements);
      ;?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";; ?>
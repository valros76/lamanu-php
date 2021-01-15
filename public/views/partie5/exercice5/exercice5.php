<?php
include $root . "public/includes/partie5/include_exercice5.php";
$pageTitle = "Exercice 5 - P5 - PHP";
$headTitle = "Exercice 5 - P5";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
      var_dump($departements);; ?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";; ?>
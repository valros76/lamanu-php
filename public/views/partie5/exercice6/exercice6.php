<?php
include $root . "public/includes/partie5/include_exercice6.php";
$pageTitle = "Exercice 6 - P5 - PHP";
$headTitle = "Exercice 6 - P5";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
      echo "<p>Index 59 : ".$departements[59]."</p>"; ?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";; ?>
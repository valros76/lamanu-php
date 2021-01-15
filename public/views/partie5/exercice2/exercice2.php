<?php
include $root . "public/includes/partie5/include_exercice2.php";
$pageTitle = "Exercice 2 - P5 - PHP";
$headTitle = "Exercice 2 - P5";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
      echo "<p>".$months[2]."</p>";
      ?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
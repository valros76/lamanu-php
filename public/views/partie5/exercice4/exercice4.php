<?php
include $root . "public/includes/partie5/include_exercice4.php";
$pageTitle = "Exercice 4 - P5 - PHP";
$headTitle = "Exercice 4 - P5";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
      echo "<p>Before : " . $months[7] . "</p>";
      $months[7] = "août";
      echo "<p>After : " . $months[7] . "</p>";
      ?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
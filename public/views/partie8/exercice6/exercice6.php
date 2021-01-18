<?php
include $root . "public/includes/partie8/include_exercice6.php";
$pageTitle = "Exercice 6 - P8 - PHP";
$headTitle = "Exercice 6 - P8";
setlocale(LC_TIME, "fr");
$date_fr = date("d/m/Y",strtotime("+20 days"));
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Afficher la date du jour + 20 jours.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <p>
         Date du jour (+20 jours) : <?= $date_fr; ?>
      </p>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
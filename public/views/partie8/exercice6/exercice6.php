<?php
include $root . "public/includes/partie8/include_exercice6.php";
$pageTitle = "Exercice 6 - P8 - PHP";
$headTitle = "Exercice 6 - P8";
setlocale(LC_TIME, "fr");
$nb_days = $number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Afficher le nombre de jour dans le mois de février de l'année 2016.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <p>
         Nombre de jours en février 2016 : <?= $nb_days; ?>
      </p>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
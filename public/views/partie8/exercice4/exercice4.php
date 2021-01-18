<?php
include $root . "public/includes/partie8/include_exercice4.php";
$pageTitle = "Exercice 4 - P8 - PHP";
$headTitle = "Exercice 4 - P8";
setlocale(LC_TIME, "fr");
$timestamp_fr = time();
$timestamp_2016 = strtotime("Tuesday 2 August 2016 15:00:00");
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Afficher le timestamp du jour.<br/>
      Afficher le timestamp du mardi 2 août 2016 à 15h00.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <p>
         Timestamp du jour : <?= $timestamp_fr; ?><br/>
         Timestamp du mardi 2 août 2016 à 15h00 : <?= $timestamp_2016; ?>
      </p>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
<?php
include $root . "public/includes/partie8/include_exercice5.php";
$pageTitle = "Exercice 5 - P8 - PHP";
$headTitle = "Exercice 5 - P8";
setlocale(LC_TIME, "fr");
$timestamp_fr = time();
$timestamp_2016 = strtotime("16 May 2016");
$delay = intval(($timestamp_fr - $timestamp_2016) / 86400);
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <p>
         Nombre de jours depuis le 16 Mai 2016 : <?= $delay; ?>
      </p>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
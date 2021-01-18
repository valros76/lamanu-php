<?php
include $root . "public/includes/partie8/include_exercice3.php";
$pageTitle = "Exercice 3 - P8 - PHP";
$headTitle = "Exercice 3 - P8";
setlocale(LC_TIME, "de");
$date_de = strftime("%A %e %B %G");
setlocale(LC_TIME, "fr");
$date_fr = strftime("%A %e %B %G");
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16).
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <p>
         Date du jour (DE) : <?= $date_de; ?><br/>
         Date du jour (FR) : <?= $date_fr; ?>
      </p>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
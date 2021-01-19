<?php
include $root . "public/includes/partie10/include_tp2.php";
$pageTitle = "TP 2 - P10 - PHP";
$headTitle = "TP 2 - P10";
$date_fr = date("d-m-Y");
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
         Date du jour : <?= $date_fr; ?>
      </p>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
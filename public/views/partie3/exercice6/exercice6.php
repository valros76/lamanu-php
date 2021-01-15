<?php
include $root . "public/includes/partie3/include_exercice6.php";
$pageTitle = "Exercice 6 - P3 - PHP";
$headTitle = "Exercice 6 - P3";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
         for($count = 20;$count >= 0; $count--){
            echo $message;
         }
      ;?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";; ?>
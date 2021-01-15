<?php
include $root . "public/includes/partie3/include_exercice7.php";
$pageTitle = "Exercice 7 - P3 - PHP";
$headTitle = "Exercice 7 - P3";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
         for($count=1;$count <= 100; $count += 15){
            echo $message;
         }
      ;?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";; ?>
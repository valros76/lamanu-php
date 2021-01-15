<?php
include $root . "public/includes/partie3/include_exercice5.php";
$pageTitle = "Exercice 5 - P3 - PHP";
$headTitle = "Exercice 5 - P3";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
   En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php 
         for($count = 1;$count <= 15;$count++){
            echo $message;
         }
      ;?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";; ?>
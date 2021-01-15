<?php
include $root . "public/includes/partie4/include_exercice1.php";
$pageTitle = "Exercice 1 - P4 - PHP";
$headTitle = "Exercice 1 - P4";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Faire une fonction qui retourne true.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
         var_dump(returnTrue())
      ?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
<?php
include $root . "public/includes/partie4/include_exercice2.php";
$pageTitle = "Exercice 2 - P4 - PHP";
$headTitle = "Exercice 2 - P4";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
         var_dump(returnString("Hello World !"));
      ?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
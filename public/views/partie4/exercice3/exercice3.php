<?php
include $root . "public/includes/partie4/include_exercice3.php";
$pageTitle = "Exercice 3 - P4 - PHP";
$headTitle = "Exercice 3 - P4";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
   Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
      var_dump(concatStrings("Hello You,", "Hello World !"));
      ;?>
   </article>
</section>
<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";; ?>
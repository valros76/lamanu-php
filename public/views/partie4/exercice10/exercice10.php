<?php
include $root . "public/includes/partie4/include_exercice10.php";
$pageTitle = "Exercice 10 - P4 - PHP";
$headTitle = "Exercice 10 - P4";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Faire une fonction qui prend en paramètre : un nombre. Elle doit renvoyer le factoriel de ce nombre.<br/>

      Bonus : faire une fonction recursive
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
         var_dump(calcFactoriel(1010));
         echo "<p>Test récursive : ".calcRecursive(2,3)."</p>";
      ;?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";; ?>
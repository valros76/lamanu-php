<?php
include $root . "public/includes/partie4/include_exercice8.php";
$pageTitle = "Exercice 8 - P4 - PHP";
$headTitle = "Exercice 8 - P4";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.<br/>
      Tous les paramètres doivent avoir une valeur par défaut.<br/>
      Bonus : Faire une fonction qui prend un nombre variable de paramètres et qui renvoie la somme des valeurs passées en arguments.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
      var_dump(getSum(6,12,8));
      echo "<p>
         Et le bonus : ".aleaSum(12,3,8,9,6,5,4)."
      </p>"
      ;?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";; ?>
<?php
include $root . "public/includes/partie3/include_exercice3.php";
$pageTitle = "Exercice 3 - P3 - PHP";
$headTitle = "Exercice 3 - P3";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.<br/>
      Tant que la première variable n'est pas inférieure ou égale à 10 :<br/>
      - multiplier la première variable avec la deuxième<br/>
      - afficher le résultat<br/>
      - décrémenter la première variable
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
      for($num1;$num1 >= 10; $num1--){
         echo "Resultat ".$num1." : ".($num1 * $num2)."<br/>";
      }
      ;?>
   </article>
</section>
<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";; ?>
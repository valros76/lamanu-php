<?php
include $root . "public/includes/partie3/include_exercice2.php";
$pageTitle = "Exercice 2 - P3 - PHP";
$headTitle = "Exercice 2 - P3";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
      Tant que la première variable n'est pas supérieure à 20 :
      - multiplier la première variable avec la deuxième
      - afficher le résultat
      - incrementer la première variable
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
      for($num1;$num1 <= 20; $num1++){
         echo "Resultat ".$num1." : ".($num1 * $num2)."<br/>";
      }
      ;?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
<?php
include $root . "public/includes/partie3/include_exercice1.php";
$pageTitle = "Exercice 1 - P3 - PHP";
$headTitle = "Exercice 1 - P3";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Créer une variable et l'initialiser à 0.
      Tant que cette variable n'atteint pas 10, il faut :
      - l'afficher
      - l'incrementer
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
      //$count = 0
         for($count;$count <= 10; $count++){
            echo "Tour ".$count." - ".$count."<br/>";
         }
      ;?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
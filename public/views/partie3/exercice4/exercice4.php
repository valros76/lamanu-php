<?php
include $root . "public/includes/partie3/include_exercice4.php";
$pageTitle = "Exercice 4 - P3 - PHP";
$headTitle = "Exercice 4 - P3";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Créer une variable et l'initialiser à 1.<br/>
      Tant que cette variable n'atteint pas 10, il faut :<br/>
      - l'afficher<br/>
      - l'incrementer de la moitié de sa valeur
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php 
      //Ou $num1 *= 1.5;
         for($num1;$num1 <= 10;$num1 += ($num1*0.5)){
            echo $num1."<br/>";
         }
      ;?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
<?php
include $root . "public/includes/partie2/include_exercice1.php";
$pageTitle = "Exercice 1 - P2 - PHP";
$headTitle = "Exercice 1 - P2";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Créer une variable age et l'initialiser avec une valeur.
      Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
         if($age > 18){
            echo "Vous êtes majeur. ";
         }else{
            echo "Vous êtes mineur. ";
         }
      ;?>
      <p>Valeur de la variable : <?= var_dump($age);?></p>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
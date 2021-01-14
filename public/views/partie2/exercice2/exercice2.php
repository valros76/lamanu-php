<?php
include $root . "public/includes/partie2/include_exercice2.php";
$pageTitle = "Exercice 2 - P2 - PHP";
$headTitle = "Exercice 2 - P2";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Créer une variable isEasy de type booléan et l'initialiser avec une valeur.
      Afficher C'est facile !! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
         switch($isEasy){
            case true:
               echo "C'est facile !!";
            break;
            case false:
            default:
               echo "C'est difficile !!!";
         }
      ;?>
      <hr width="100%" />
      <p>Valeur de la variable, avec var_dump : <?= var_dump($isEasy);?></p>
      <p>Valeur de la variable, sans var_dump : <?= $isEasy;?></p>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
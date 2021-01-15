<?php
include $root . "public/includes/partie3/include_exercice10.php";
$pageTitle = "Exercice 10 - P3 - PHP";
$headTitle = "Exercice 10 - P3";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Créer une variable nombre aléatoire et l'initialiser avec un nombre aléatoire compris entre 0 et 30.<br/>
      En allant de 1 à 100 avec un pas de 1, afficher tous les nombres sauf celui correspondant au nombre aléatoire.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
         echo "Count = ".$count."<br/>";
         for($i = 1;$i <= 100; $i++){
            if($i != $count){
               echo $i."<br/>";
            }
         }
      ;?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";; ?>
<?php
include $root . "public/includes/partie3/include_exercice9.php";
$pageTitle = "Exercice 9 - P3 - PHP";
$headTitle = "Exercice 9 - P3";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Créer une variable nombre aléatoire et l'initialiser avec un nombre aléatoire compris entre 0 et 30.<br/>
      En allant de 1 à 100 avec un pas de 1, afficher les nombres jusqu'au nombre aléatoire, puis sortir de la boucle.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
         for($i = 1;$i  <= 100, $i <= $count;$i++){
            echo "<p>".$i."</p>";
            echo "Count = ".$count;
            //Si on utilise juste la première condition :
            // if($i <= $count){
            //    echo $i."<br/>";
            //    continue;
            // }else{
            //    echo "Count = ".$count;
            //    break;
            // }
         }
      ;?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";; ?>
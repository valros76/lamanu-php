<?php
include $root . "public/includes/partie5/include_exercice10.php";
$pageTitle = "Exercice 10 - P5 - PHP";
$headTitle = "Exercice 10 - P5";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.<br/>
      Cela pourra être, par exemple, de la forme : Le département + nom du département + a le numéro + numéro du département
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
         echo "<p><em>Méthode rapide</em></p>";
         foreach($departements as $num => $name){
            echo "<p>Le département ".$name." a le numéro ".$num.".</p>";
         }
         echo "<p><em>Méthode longue</em></p>";
         echo "<p>".key($departements)." : ".current($departements)."</p>";
         next($departements);
         echo "<p>".key($departements)." : ".current($departements)."</p>";
         next($departements);
         echo "<p>".key($departements)." : ".current($departements)."</p>";
         next($departements);
         echo "<p>".key($departements)." : ".current($departements)."</p>";
         next($departements);
         echo "<p>".key($departements)." : ".current($departements)."</p>";
         reset($departements);
      ;?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";; ?>
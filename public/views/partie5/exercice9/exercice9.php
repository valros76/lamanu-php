<?php
include $root . "public/includes/partie5/include_exercice9.php";
$pageTitle = "Exercice 9 - P5 - PHP";
$headTitle = "Exercice 9 - P5";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
      echo "<p><em>Méthode 1 [débugger un tableau - Méthode développeur]</em></p>";
      var_dump($departements); 
      echo "<p><em>Méthode 2</em></p>";
      echo "<p>".key($departements)." : ".$departements[2]."</p>";
      next($departements);
      echo "<p>".key($departements)." : ".$departements[59]."</p>";
      next($departements);
      echo "<p>".key($departements)." : ".$departements[60]."</p>";
      next($departements);
      echo "<p>".key($departements)." : ".$departements[62]."</p>";
      next($departements);
      echo "<p>".key($departements)." : ".$departements[80]."</p>";
      reset($departements);
      ;?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";; ?>
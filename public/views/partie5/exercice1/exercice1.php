<?php
include $root . "public/includes/partie5/include_exercice1.php";
$pageTitle = "Exercice 1 - P5 - PHP";
$headTitle = "Exercice 1 - P5";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Créer un tableau months et l'initialiser avec les valeurs suivantes :<br/>
      janvier<br/>
      février<br/>
      mars<br/>
      avril<br/>
      mai<br/>
      juin<br/>
      juillet<br/>
      aout<br/>
      septembre<br/>
      octobre<br/>
      novembre<br/>
      décembre
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
      foreach($months as $month){
         echo "<p>".$month."</p>";
      }
      ?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
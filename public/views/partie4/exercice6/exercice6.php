<?php
include $root . "public/includes/partie4/include_exercice6.php";
$pageTitle = "Exercice 6 - P4 - PHP";
$headTitle = "Exercice 6 - P4";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne.<br/> Elle doit renvoyer une chaine de la forme :<br/>
      Bonjour + nom + prénom + , tu as + age + ans.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
      var_dump(concatPersona("Concepteur", "Webdevoo", 25));
      ;?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";; ?>
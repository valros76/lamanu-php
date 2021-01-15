<?php
include $root . "public/includes/partie4/include_exercice7.php";
$pageTitle = "Exercice 7 - P4 - PHP";
$headTitle = "Exercice 7 - P4";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :<br />
      Homme<br />
      Femme<br />
      La fonction doit renvoyer en fonction des paramètres :<br />
      Vous êtes un homme et vous êtes majeur<br />
      Vous êtes un homme et vous êtes mineur<br />
      Vous êtes une femme et vous êtes majeure<br />
      Vous êtes une femme et vous êtes mineure<br />
      Gérer tous les cas.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
      var_dump(sayHello(25, "Homme"));
      ;?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";; ?>
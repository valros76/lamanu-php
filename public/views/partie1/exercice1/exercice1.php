<?php
include $root."public/includes/partie1/include_exercice1.php";
$pageTitle = "Exercice 1 - P1 - PHP";
$headTitle = "Exercice 1";
ob_start();
;?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Créer une variable name et l'initialiser avec la valeur de votre choix.  Afficher son contenu.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <p>Nom de la variable : $name</p>
      <p>Contenu de la variable : <?= $name ?></p>
      <p>Localisation de la variable : /public/includes/include_exercice1.php</p>
      <p>Appel de l'include sur la page : <pre>include $root."public/includes/include_exercice1.php";</pre></p>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root."/public/templates/default_template.php";
;?>
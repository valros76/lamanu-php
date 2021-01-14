<?php
include $root . "public/includes/partie1/include_exercice3.php";
$pageTitle = "Exercice 3 - P1 - PHP";
$headTitle = "Exercice 3 - P1";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Créer une variable km. L'initialiser à 1. Afficher son contenu.
      Changer sa valeur par 3. Afficher son contenu.
      Changer sa valeur par 125. Afficher son contenu.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <p>Nom des variables : $km</p>
      <hr width="100%" />
      <p>Contenu de la variable $km, état initial (1) : <?= $km ?></p>
      <p>Contenu de la variable $km, état 2 (3) : <?php $km = 3; echo $km; ?></p>
      <p>Contenu de la variable $km, état 3 (125) : <?php $km = 125; echo $km; ?></p>
      <hr width="100%" />
      <p>Localisation des variable : /public/includes/include_exercice3.php</p>
      <p>Appel de l'include sur la page :
      <pre>include $root."public/includes/include_exercice3.php";</pre>
      </p>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
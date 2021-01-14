<?php
include $root . "public/includes/partie1/include_exercice4.php";
$pageTitle = "Exercice 4 - P1 - PHP";
$headTitle = "Exercice 4 - P1";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.
      Les afficher.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <p>Nom des variables : $sringy, $inty, $floaty, $booly</p>
      <hr width="100%" />
      <p>Contenu de la variable $stringy, type string : <?= $stringy ?></p>
      <p>Contenu de la variable $inty, type int : <?= $inty ?></p>
      <p>Contenu de la variable $floaty, type float : <?= $floaty ?></p>
      <p>Contenu de la variable $booly, type booleen : <?= $booly ?></p>
      <p>Contenu de la variable $booly, type booleen avec var_dump : <?= var_dump($booly) ?></p>
      <hr width="100%" />
      <p>Localisation des variable : /public/includes/include_exercice4.php</p>
      <p>Appel de l'include sur la page :
      <pre>include $root."public/includes/include_exercice4.php";</pre>
      </p>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
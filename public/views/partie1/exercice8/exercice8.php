<?php
include $root . "public/includes/partie1/include_exercice8.php";
$pageTitle = "Exercice 8 - P1 - PHP";
$headTitle = "Exercice 8 - P1";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Créer 5 variables sum, difference, product, quotient, modulo.<br />
      Dans la première mettre le résultat de l'opération 3 + 4.<br />
      Dans la deuxième mettre le résultat de l'opération 100 - 20.<br />
      Dans la troisième mettre le résultat de l'opération 45 * 15.<br />
      Dans la quatrième mettre le résultat de l'opération 45 / 15.<br />
      Dans la cinquième mettre le reste de la division entière 75 % 15.<br />
      Afficher le contenu des variables.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <p>Nom des variables : $sum, $difference, $product, $quotient, $modulo</p>
      <hr width="100%" />
      <p>Contenu de la variable $sum : <?= $sum ?></p>
      <p>Contenu de la variable $difference : <?= $difference ?></p>
      <p>Contenu de la variable $product : <?= $product ?></p>
      <p>Contenu de la variable $quotient : <?= $quotient ?></p>
      <p>Contenu de la variable $modulo : <?= $modulo ?></p>
      <hr width="100%" />
      <p>Localisation des variable : /public/includes/include_exercice8.php</p>
      <p>Appel de l'include sur la page :
      <pre>include $root."public/includes/include_exercice8.php";</pre>
      </p>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
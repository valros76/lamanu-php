<?php
include $root . "public/includes/partie1/include_exercice5.php";
$pageTitle = "Exercice 5 - P1 - PHP";
$headTitle = "Exercice 5 - P1";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur avec la fonction var_dump.
      Donner une valeur à cette variable et l'afficher.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <p>Nom des variables : $inty</p>
      <hr width="100%" />
      <p>Contenu de la variable $inty, type int avec var_dump : <?= var_dump($inty) ?></p>
      <p>Contenu de la variable $inty, type int avec une nouvelle valeur : <?php $inty = 12; echo $inty; ?></p>
      <hr width="100%" />
      <p>Localisation des variable : /public/includes/include_exercice5.php</p>
      <p>Appel de l'include sur la page :
      <pre>include $root."public/includes/include_exercice5.php";</pre>
      </p>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
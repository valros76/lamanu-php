<?php
include $root . "public/includes/partie1/include_exercice6.php";
$pageTitle = "Exercice 6 - P1 - PHP";
$headTitle = "Exercice 6 - P1";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Créer une variable name et l'initialiser avec la valeur de votre choix.
      Afficher : Bonjour + name + , comment vas tu ?.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <p>Nom des variables : $name</p>
      <hr width="100%" />
      <p>Contenu de la variable $name, avec concaténation en php : <?= "Bonjour ".$name.", comment vas-tu ?" ?></p>
      <hr width="100%" />
      <p>Localisation des variable : /public/includes/include_exercice6.php</p>
      <p>Appel de l'include sur la page :
      <pre>include $root."public/includes/include_exercice6.php";</pre>
      </p>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
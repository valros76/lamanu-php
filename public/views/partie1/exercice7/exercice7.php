<?php
include $root . "public/includes/partie1/include_exercice7.php";
$pageTitle = "Exercice 7 - P1 - PHP";
$headTitle = "Exercice 7 - P1";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.
      Afficher : Bonjour + lastname + firstname + , tu as + age + ans.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <p>Nom des variables : $lastname, $firstname, $age</p>
      <hr width="100%" />
      <p>Contenu des variables $lastname/$firstname/$age, avec concaténation en php : <?= "Bonjour " . $lastname . " " . $firstname . ", tu as " . $age . " ans." ?></p>
      <hr width="100%" />
      <p>Localisation des variable : /public/includes/include_exercice7.php</p>
      <p>Appel de l'include sur la page :
      <pre>include $root."public/includes/include_exercice7.php";</pre>
      </p>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
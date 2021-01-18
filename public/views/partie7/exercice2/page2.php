<?php
if(session_status() == PHP_SESSION_NONE){
   session_start();
}
include $root . "public/includes/partie7/include_exercice2.php";
$pageTitle = "Exercice 2 - Page 2 - P7 - PHP";
$headTitle = "Exercice 2 - Page 2 - P7";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Sur la page index, faire un lien vers une autre page.<br/>
       Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions.<br/>
      Ces variables auront été définies directement dans le code.<br/>
      Il faudra afficher le contenu de ces variables sur la deuxième page.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <p>
         Affichage des données en session : <br/>
         Lastname : <?= $_SESSION["lastname"];?><br/>
         Firstname : <?= $_SESSION["firstname"];?><br/>
         Âge : <?= $_SESSION["age"];?><br/>
         <a href="?part=partie7&page=exercice2">Aller sur la page 1</a>
      </p>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
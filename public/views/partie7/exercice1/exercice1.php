<?php
include $root . "public/includes/partie7/include_exercice1.php";
$pageTitle = "Exercice 1 - P7 - PHP";
$headTitle = "Exercice 1 - P7";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Faire une page HTML permettant de donner à l'utilisateur :<br/>
      son User Agent<br/>
      son adresse ip<br/>
      le nom du serveur
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <p>
         Bonjour.<br/>
         Votre User Agent : <?= $_SERVER["HTTP_USER_AGENT"];?><br/>
         Votre adresse IP : <?= $_SERVER["REMOTE_ADDR"];?><br/>
         Le nom du serveur : <?= $_SERVER["SERVER_NAME"];?>
      </p>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
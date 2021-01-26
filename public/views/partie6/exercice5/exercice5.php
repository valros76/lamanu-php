<?php
include $root . "public/includes/partie6/include_exercice5.php";
$pageTitle = "Exercice 5 - P6 - PHP";
$headTitle = "Exercice 5 - P6";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Créer un formulaire sur la page index.php avec :<br/>
      Une liste déroulante pour la civilité (Mr ou Mme)<br/>
      Un champ texte pour le nom<br/>
      Un champ texte pour le prénom<br/>
      Ce formulaire doit rediriger vers la page index.php.<br/>
      Vous avez le choix de la méthode.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <form action="<?= $_SERVER["REQUEST_URI"]; ?>" method="POST">
         <div class="form-part-1">
         <select name="civilite" id="civilite">
            <option value="mr">Mr</option>
            <option value="mme">Mme</option>
         </select>
         <label for="firstname">Prénom : </label>
         <input type="text" name="firstname" id="firstname" placeholder="John" required />
         <label for="lastname">Nom de famille :</label>
         <input type="text" name="lastname" id="lastname" placeholder="Doe" required />
         <input type="submit" value="Valider">
         </div>
      </form>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";; ?>
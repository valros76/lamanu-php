<?php
include $root . "public/includes/partie6/include_exercice9.php";
$pageTitle = "Exercice 9 - P6 - PHP";
$headTitle = "Exercice 9 - P6";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Créer un formulaire de création de profil sur la page index.php avec :<br />
      • Une des bouton radio pour civilité (Mr ou Mme)<br />
      • Un champ texte pour le nom<br />
      • Un champ texte pour le prénom<br />
      • Un champ date pour la date de naissance<br />
      • Un champ d'envoi de fichier pour l'image de profil.<br />
      A la soumission du formulaire, si tous les champs sont correctement renseignés, uploadez l'image de profil dans un dossier image que vous auriez créer en amont. Afficher le profil de l'utilisateur dans une page profile.php
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <form action="?part=partie6&page=exercice9&userpage=profilep6ex9" method="POST" enctype="multipart/form-data">
         <div class="form-part-1">
      <fieldset>
         <legend>
            Sélectionnez votre civilité
         </legend>
         <input type="radio" name="civilite" id="mr" value="mr" checked>
         <label for="mr">Mr</label>
         <input type="radio" name="civilite" id="mme" value="mme">
         <label for="mme">Mme</label>
      </fieldset>
         <label for="firstname">Prénom : </label>
         <input type="text" name="firstname" id="firstname" placeholder="John" required />
         <label for="lastname">Nom de famille :</label>
         <input type="text" name="lastname" id="lastname" placeholder="Doe" required />
         <label for="birthday">Date de naissance :</label>
         <input type="date" name="birthday" id="birthday" min="1920-01-01" max="2020-01-01" required />
         <input type="file" name="avatar" id="avatar" accept="image/jpeg,image/png" required />
         <input type="submit" value="Valider">
         </div>
      </form>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";; ?>
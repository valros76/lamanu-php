<?php
include $root . "public/includes/partie6/include_exercice8.php";
$pageTitle = "Exercice 8 - P6 - PHP";
$headTitle = "Exercice 8 - P6";
if (isset($_POST) && !empty($_POST)) {
   $civilite = isset($_POST["civilite"]) && !empty($_POST["civilite"]) ? $_POST["civilite"] : "";
   $firstname = isset($_POST["firstname"]) && !empty($_POST["firstname"]) ? $_POST["firstname"] : "";
   $lastname = isset($_POST["lastname"]) && !empty($_POST["lastname"]) ? $_POST["lastname"] : "";
   $file = isset($_FILES["pdf"]) && !empty($_FILES["pdf"]) && $_FILES["pdf"]["type"] == "application/pdf" ? $_FILES["pdf"] : "";
   $data = '<p>' . $civilite . ' ' . $firstname . ' ' . $lastname . '</p><p>Fichier : ' . $file["name"] . ', Extension : ' . $file["type"] . '</p>';
} else {
   $form = '
   <form action="' . $_SERVER["REQUEST_URI"] . '" method="POST" enctype="multipart/form-data"><div class="form-part-1">
   <select name="civilite" id="civilite">
      <option value="mr">Mr</option>
      <option value="mme">Mme</option>
   </select>
   <label for="firstname">Prénom : </label>
   <input type="text" name="firstname" id="firstname" placeholder="John" required />
   <label for="lastname">Nom de famille :</label>
   <input type="text" name="lastname" id="lastname" placeholder="Doe" required />
   <input type="file" name="pdf" id="pdf" accept="application/pdf" required />
   <input type="submit" value="Valider">
   </div></form>
';
}
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier pdf.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?= $form ?? $data; ?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";; ?>
<?php
include $root . "public/includes/partie6/include_exercice1.php";
$pageTitle = "Exercice 1 - P6 - PHP";
$headTitle = "Exercice 1 - P6";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode GET.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <form action="public/userpages/p6ex1.php" method="GET">
         <div class="form-part-1">
         <label for="firstname">Prénom : </label>
         <input type="text" name="firstname" id="firstname" placeholder="John" required/>
         <label for="lastname">Nom de famille :</label>
         <input type="text" name="lastname" id="lastname" placeholder="Doe" required/>
         <input type="submit" value="Valider">
         </div>
      </form>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
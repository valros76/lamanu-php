<?php
include $root . "public/includes/partie6/include_exercice3.php";
$pageTitle = "Exercice 3 - P6 - PHP";
$headTitle = "Exercice 3 - P6";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
   Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <form action="public/userpages/p6ex3.php" method="GET">
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
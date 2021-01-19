<?php
include $root . "public/includes/partie10/include_tp1.php";
$pageTitle = "TP 1 - P10 - PHP";
$headTitle = "TP 1 - P10";
$civilite = isset($_POST["civilite"]) && !empty($_POST["civilite"]) ? $_POST["civilite"] : "";
$lastname = isset($_POST["lastname"]) && !empty($_POST["lastname"]) ? $_POST["lastname"] : "";
$firstname = isset($_POST["firstname"]) && !empty($_POST["firstname"]) ? $_POST["firstname"] : "";
$age = isset($_POST["age"]) && !empty($_POST["age"]) ? $_POST["age"] : "";
$societe = isset($_POST["societe"]) && !empty($_POST["societe"]) ? $_POST["societe"] : "";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016).
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
         if(!empty($civilite) &&!empty($lastname) && !empty($firstname) && !empty($age) && !empty($societe)){
            echo '
            <p>Civilité : '.strtoupper($civilite).'</p>
            <p>Nom : '.$lastname.'</p>
            <p>Prénom : '.$firstname.'</p>
            <p>Âge : '.$age.'</p>
            <p>Société : '.$societe.'</p>'
            ;
         }else{
            echo '<p>Formulaire non rempli ou champs manquant.</p>';
         }
      ;?>
      <form action="<?= $_SERVER["REQUEST_URI"];?>" method="POST">
         <select name="civilite" id="civilite">
            <option value="mr" selected>M.</option>
            <option value="mme">Mme</option>
         </select>
         <label for="lastname">Nom</label>
         <input type="text" name="lastname" id="lastname" required/>
         <label for="firstname">Prénom</label>
         <input type="text" name="firstname" id="firstname" required/>
         <label for="age">Âge</label>
         <input type="number" min="1" max="135" name="age" id="age" required/>
         <label for="societe">Société</label>
         <input type="text" name="societe" id="societe" required/>
         <input type="submit" value="Valider">
      </form>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
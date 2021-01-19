<?php
include $root . "public/includes/partie10/include_tp2.php";
$pageTitle = "TP 2 - P10 - PHP";
$headTitle = "TP 2 - P10";
$civilite = isset($_POST["civilite"]) && !empty($_POST["civilite"]) ? $_POST["civilite"] : "";
$firstname = isset($_POST["firstname"]) && !empty($_POST["firstname"]) ? $_POST["firstname"] : "";
$birthday = isset($_POST["birthday"]) && !empty($_POST["birthday"]) ? $_POST["birthday"] : "";
$birth_state = isset($_POST["birth_state"]) && !empty($_POST["birth_state"]) ? $_POST["birth_state"] : "";
$nationality = isset($_POST["nationality"]) && !empty($_POST["nationality"]) ? $_POST["nationality"] : "";
$adress = isset($_POST["adress"]) && !empty($_POST["adress"]) ? $_POST["adress"] : "";
$email = isset($_POST["email"]) && !empty($_POST["email"]) ? $_POST["email"] : "";
$phone = isset($_POST["phone"]) && !empty($_POST["phone"]) ? $_POST["phone"] : "";
$diploma = isset($_POST["diploma"]) && !empty($_POST["diploma"]) ? $_POST["diploma"] : "";
$pole_emploi_id = isset($_POST["pole_emploi_id"]) && !empty($_POST["pole_emploi_id"]) ? $_POST["pole_emploi_id"] : "";
$nb_badges = isset($_POST["nb_badges"]) && !empty($_POST["nb_badges"]) ? $_POST["nb_badges"] : "";
$code_academy_links = isset($_POST["code_academy_links"]) && !empty($_POST["code_academy_links"]) ? $_POST["code_academy_links"] : "";
$marvel = isset($_POST["marvel"]) && !empty($_POST["marvel"]) ? $_POST["marvel"] : "";
$hacks = isset($_POST["hacks"]) && !empty($_POST["hacks"]) ? $_POST["hacks"] : "";
$xp = isset($_POST["xp"]) && !empty($_POST["xp"]) ? $_POST["xp"] : "";
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
      if (
         !empty($civilite)
         && !empty($firstname)
         && !empty($birthday)
         && !empty($birth_state)
         && !empty($nationality)
         && !empty($adress)
         && !empty($email)
         && !empty($phone)
         && !empty($diploma)
         && !empty($pole_emploi_id)
         && !empty($nb_badges)
         && !empty($code_academy_links)
         && !empty($marvel)
         && !empty($hacks)
         && !empty($xp)
         && !empty($societe)
      ) {
         echo '
            <p>Civilité : ' . strtoupper($civilite) . '</p>
            <p>Nom : ' . $lastname . '</p>
            <p>Prénom : ' . $firstname . '</p>
            <p>Âge : ' . $age . '</p>
            <p>Société : ' . $societe . '</p>';
      } else if (
         !empty($_POST)
         && (!empty($civilite)
            || !empty($firstname)
            || !empty($birthday)
            || !empty($birth_state)
            || !empty($nationality)
            || !empty($adress)
            || !empty($email)
            || !empty($phone)
            || !empty($diploma)
            || !empty($pole_emploi_id)
            || !empty($nb_badges)
            || !empty($code_academy_links)
            || !empty($marvel)
            || !empty($hacks)
            || !empty($xp)
            || !empty($societe))
      ) {
         echo '<p>Information manquante.</p>';
      } else {
         echo '<p>Formulaire non rempli.</p>';
      }; ?>
      <form action="<?= $_SERVER["REQUEST_URI"]; ?>" method="POST">
         <select name="civilite" id="civilite">
            <option value="mr" selected>M.</option>
            <option value="mme">Mme</option>
         </select>
         <label for="firstname">Prénom</label>
         <input type="text" name="firstname" id="firstname" required />
         <label for="birthday">Date de naissance :</label>
         <input type="date" name="birthday" id="birthday" min="1920-01-01" max="2020-01-01" required />
         <label for="state">Pays de naissance</label>
         <input type="text" name="state" id="state" required />
         <label for="societe">Société</label>
         <input type="text" name="societe" id="societe" required />
         <input type="submit" value="Valider">
      </form>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
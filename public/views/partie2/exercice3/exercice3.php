<?php
include $root . "public/includes/partie2/include_exercice3.php";
$pageTitle = "Exercice 3 - P2 - PHP";
$headTitle = "Exercice 3 - P2";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Créer deux variables age et gender. <br />
      La variable gender peut prendre comme valeur :<br />
      Homme<br />
      Femme<br />
      En fonction de l'âge et du genre afficher la phrase correspondante :<br />
      Vous êtes un homme et vous êtes majeur<br />
      Vous êtes un homme et vous êtes mineur<br />
      Vous êtes une femme et vous êtes majeure<br />
      Vous êtes une femme et vous êtes mineur<br />
      Gérer tous les cas.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
      if ($gender === "Homme" && $age <= 18) {
         echo "<p>Vous êtes un homme et vous êtes mineur.</p>";
      } else if ($gender === "Homme" && $age > 18) {
         echo "<p>Vous êtes un homme et vous êtes majeur.</p>";
      } else if ($gender === "Femme" && $age > 18) {
         echo "<p>Vous êtes une femme et vous êtes majeure.</p>";
      } else if ($gender === "Femme" && $age > 18) {
         echo "<p>Vous êtes une femme et vous êtes majeure.</p>";
      }; ?>
      <button id="spoiler-toggle">Afficher le code PHP</button>
      <p class="important-para" id="spoiler">
         if ($gender === "Homme" && $age
         <= 18) { <br />
         echo "&ltp>Vous êtes un homme et vous êtes mineur.&lt/p>"; <br />
         } else if ($gender==="Homme" && $age> 18) { <br />
         echo "&ltp>Vous êtes un homme et vous êtes majeur.&lt/p>"; <br />
         } else if ($gender === "Femme" && $age > 18) { <br />
         echo "&ltp>Vous êtes une femme et vous êtes majeure.&lt/p>"; <br />
         } else if ($gender === "Femme" && $age > 18) { <br />
         echo "&ltp>Vous êtes une femme et vous êtes majeure.&lt/p>"; <br />
         };
      </p>
      <hr width="100%" />
      <p>Bonus - boucle sur 4 cas (Homme mineur, Homme majeur, Femme mineure, Femme majeure) :</p>
      <?php
      $hommeMineur = [
         "gender" => "Homme",
         "age" => 25
      ];
      $hommeMajeur = [
         "gender" => "Homme",
         "age" => 25
      ];
      $femmeMineure = [
         "gender" => "Femme",
         "age" => 25
      ];
      $femmeMajeure = [
         "gender" => "Femme",
         "age" => 25
      ];
      $cases = [
         1 => $hommeMineur,
         2 => $hommeMajeur,
         3 => $femmeMineure,
         4 => $femmeMajeure
      ];
      foreach ($cases as $case) {
         switch ($case["gender"]) {
            case "Homme":
               if ($case["age"] <= 18) {
                  echo "<p>Vous êtes un homme et vous êtes mineur.</p>";
               } else {
                  echo "<p>Vous êtes un homme et vous êtes majeur.</p>";
               }
               break;
            case "Femme":
               if ($case["age"] <= 18) {
                  echo "<p>Vous êtes une femme et vous êtes mineure.</p>";
               } else {
                  echo "<p>Vous êtes une femme et vous êtes majeure.</p>";
               }
               break;
            default:
               echo "<p>Erreur</p>";
         }
      }; ?>
   </article>
</section>
<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";; ?>
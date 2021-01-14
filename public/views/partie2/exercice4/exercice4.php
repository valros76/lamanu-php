<?php
include $root . "public/includes/partie2/include_exercice4.php";
$pageTitle = "Exercice 4 - P2 - PHP";
$headTitle = "Exercice 4 - P2";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
      Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <p><em>Méthode 1</em></p>
      <?php
      foreach($magnitude as $force => $phrase){
         echo "<p>".$force." - ".$phrase."</p>";
      }
      ;?>
      <hr width="100%"/>
      <p><em>Méthode 2</em></p>
      <?php 
         $init_magnitude = 3;
         switch($init_magnitude){
            case 1:
               echo "<p>1 - ".$magnitude[$init_magnitude]."</p>";
            break;
            case 2:
               echo "<p>2 - ".$magnitude[$init_magnitude]."</p>";
            break;
            case 3:
               echo "<p>3 - ".$magnitude[$init_magnitude]."</p>";
            break;
            case 4:
               echo "<p>4 - ".$magnitude[$init_magnitude]."</p>";
            break;
            case 5:
               echo "<p>5 - ".$magnitude[$init_magnitude]."</p>";
            break;
            case 6:
               echo "<p>6 - ".$magnitude[$init_magnitude]."</p>";
            break;
            case 7:
               echo "<p>7 - ".$magnitude[$init_magnitude]."</p>";
            break;
            case 8:
               echo "<p>8 - ".$magnitude[$init_magnitude]."</p>";
            break;
            case 9:
               echo "<p>9 - ".$magnitude[$init_magnitude]."</p>";
            break;
            default:
               echo "<p>Erreur : Aucune assignation de valeur</p>";
         }
      ;?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
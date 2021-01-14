<?php
include $root . "public/includes/partie2/include_exercice7.php";
$pageTitle = "Exercice 7 - P2 - PHP";
$headTitle = "Exercice 7 - P2";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Traduire ce code avec des if et des else :
   <p class="important-para">
      &lt?php<br/>
      $var_b = 'Je suis une variable qui à une valeur';<br/>
      echo $var_b ?? 'Je suis une variable sans valeur';<br/>
      ?>
      </pre>
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <button id="spoiler-toggle">Afficher le code PHP</button>
      <p class="important-para" id="spoiler">
         if ($var_b =! null) { <br />
         //On affiche le contenu de $var_b, soit 'Je suis une variable qui à une valeur'
         echo $var_b; <br />
         } else { <br />
         echo "Je suis une variable sans valeur"; <br />
         }
      </p>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";
; ?>
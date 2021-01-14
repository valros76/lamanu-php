<?php
include $root . "public/includes/partie2/include_exercice6.php";
$pageTitle = "Exercice 6 - P2 - PHP";
$headTitle = "Exercice 6 - P2";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Traduire ce code avec des if et des else :
   <p class="important-para">
      &lt?php<br/>
      $var_a = null;<br/>
      echo $var_a ?: 'Je suis une variable sans valeur';<br/>
      ?>
      </pre>
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <button id="spoiler-toggle">Afficher le code PHP</button>
      <p class="important-para" id="spoiler">
         if ($var_a =! null) { <br />
         //On affiche le contenu de $var_a<br/>
         echo $var_a; <br />
         } else { <br />
         echo "Je suis une variable sans valeur"; <br />
         }
      </p>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";; ?>
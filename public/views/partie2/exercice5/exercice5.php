<?php
include $root . "public/includes/partie2/include_exercice5.php";
$pageTitle = "Exercice 5 - P2 - PHP";
$headTitle = "Exercice 5 - P2";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Traduire ce code avec des if et des else :
      <p class="important-para">
      &lt?php<br/>
      echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';<br/>
      ?>
      </pre>
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <button id="spoiler-toggle">Afficher le code PHP</button>
      <p class="important-para" id="spoiler">
         if ($gender =! "Homme") { <br />
         echo "C\'est une développeuse !!!"; <br />
         } else { <br />
         echo "C\'est un développeur !!!"; <br />
         }
      </p>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";; ?>
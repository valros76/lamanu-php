<?php
include $root . "public/includes/partie4/include_exercice4.php";
$pageTitle = "Exercice 4 - P4 - PHP";
$headTitle = "Exercice 4 - P4";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :<br/>
      Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième<br/>
      Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième<br/>
      Les deux nombres sont identiques si les deux nombres sont égaux
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php
         var_dump(compareIntNumbers(5,5));
      ;?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
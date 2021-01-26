<?php
include $root . "public/includes/partie10/include_tp2.php";
$pageTitle = "TP 2 - P10 - PHP";
$headTitle = "TP 2 - P10";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Créer un formulaire avec une vérification en PHP.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php 
         if($_SESSION["debug"] != true){
            include $root.'/public/includes/forms/form_tp2.php';
         }else{
            include $root.'/public/includes/forms/form_tp2_debug.php';
         }
      ;?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = '<script src="/public/sources/js/multi_form.js" async></script>';
require_once $root . "/public/templates/default_template.php";; ?>
<?php
$pageTitle = "Root PHP";
$headTitle = "Root";
ob_start();
;?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Bienvenue sur l'accueil des exercices PHP [Webdevoo]
   </h2>
   <p>
      Vous pouvez consulter l'entièreté des exercices PHP.
   </p>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root."/public/templates/default_template.php";
;?>
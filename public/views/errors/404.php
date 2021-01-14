<?php
$pageTitle = "Erreur 404";
$headTitle = "404";
ob_start();
;?>

<section class="error-sections">
   <h2 class="error-sections-title">
      Erreur 404
   </h2>
   <p class="errors-sections-description">
      Impossible de trouver le contenu demandé.
   </p>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root."/public/templates/default_template.php";
;?>
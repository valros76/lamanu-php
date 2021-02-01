<?php
include $root . "public/includes/galery/include_galery.php";
include $root . "public/controllers/actions/show_galery.php";
$pageTitle = "Galerie JSON - PHP";
$headTitle = "Galerie - P10";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Manipuler du JSON<br />
      Créer un formulaire pour uploader une image<br />
      L'image devra être réduite, renommée et qu'un fichier JSON soit créé en PHP<br />
      Afficher les images sous forme de galerie grâce au JSON<br />
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?= $form_galery ?? ""; ?>
      <?php
      if (showGalery() != null) {
         $exists_galery = showGalery();
      ;?>
         <div class="show-galery">
            <?php 
               foreach($exists_galery as $galery_img){
                  echo $galery_img;
               }
            ;?>
         </div>
      <?php
         }
      ;?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = '<script src="/public/sources/js/galery.js" defer></script>';
require_once $root . "/public/templates/default_template.php";; ?>
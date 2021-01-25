<?php
// include $root . "public/includes/partie6/include_exercice9.php";
$pageTitle = "Exercice 9 - Profile - P6 - PHP";
$headTitle = "Exercice 9 - Profile - P6";
$civilite = isset($_POST["civilite"]) && !empty($_POST["civilite"]) ? $_POST["civilite"] : "";
$lastname = isset($_POST["lastname"]) && !empty($_POST["lastname"]) ? $_POST["lastname"] : "";
$firstname = isset($_POST["firstname"]) && !empty($_POST["firstname"]) ? $_POST["firstname"] : "";
$birthday = isset($_POST["birthday"]) && !empty($_POST["birthday"]) ? $_POST["birthday"] : "";
$avatar = isset($_FILES["avatar"]) && !empty($_FILES["avatar"]) ? $_FILES["avatar"] : "";
$avatar_moved = "";

if (
   !empty($civilite)
   && !empty($lastname)
   && !empty($firstname)
   && !empty($birthday)
   && !empty($_FILES)
) {
   $img_dir = "$root/public/upload/images/";
   $avatar_file = $img_dir . basename($avatar["name"]);
   $avatar_type = strtolower(pathinfo($avatar_file, PATHINFO_EXTENSION));
   $uploadState = 1;

   if (file_exists($avatar_file)) {
      $err_exists_file = "Le fichier existe déjà.";
      $uploadOk = 0;
   }
   if (move_uploaded_file($avatar["tmp_name"], $avatar_file) && $uploadState === 1) {
      $confirm_move_file = "The file " . htmlspecialchars(basename($avatar["name"])) . " has been uploaded.";
      $avatar_moved = htmlspecialchars(basename($avatar["name"]));
   }
}
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Profil
   </h2>
   <div class="avatar-container">
      <img src="public/upload/images/<?= $avatar["name"]; ?>" alt="avatar" class="avatar" />
   </div>
   <p class="main-sections-description">
      Civilité : <?= strtoupper($civilite); ?><br />
      <?php if (!empty($avatar)):;?>
         <img src="<?= $avatar_moved;?>" alt="">
      <?php endif; ?>
      Nom de famille : <?= $lastname; ?><br />
      Prénom : <?= $firstname; ?><br />
      Date de naissance : <?= $birthday; ?>
   </p>
   <?php
   if (isset($err_exists_file) && !empty($err_exists_file)) {
      echo "<p class='file-errors'>" . $err_exists_file . "</p>";
   }
   if (isset($confirm_move_file) && !empty($confirm_move_file)) {
      echo "<p class='confirm-action'>" . $confirm_move_file . "</p>";
   }; ?>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";; ?>
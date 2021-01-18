<?php
include $root . "public/includes/partie8/include_tp.php";
$pageTitle = "TP - P8 - PHP";
$headTitle = "TP - P8";
if (isset($_POST) && !empty($_POST)) {
   $username = isset($_POST["username"]) && !empty($_POST["username"]) ? $_POST["username"] : "";
   $password = isset($_POST["password"]) && !empty($_POST["password"]) ? password_hash($_POST["password"], PASSWORD_DEFAULT) : "";
   // if (isset($_COOKIE["username"]) && isset($_COOKIE["password"])) {
   //    unset($_COOKIE["username"]);
   //    unset($_COOKIE["password"]);
   // }
   if (!isset($_COOKIE["username"]) && !empty($username) && !isset($_COOKIE["password"]) && !empty($password)) {
      setcookie("username", $username);
      setcookie("password", $password);
      //NE JAMAIS REPRODUIRE LA LIGNE DU DESSUS !!! 😱
   } elseif (isset($_COOKIE["username"]) && !empty($username) && isset($_COOKIE["password"]) && !empty($password)) {
      $_COOKIE["username"] = $username;
      $_COOKIE["password"] = $password;
   }
}
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiche.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <form action="<?= $_SERVER["REQUEST_URI"]; ?>" method="POST">
         <label for="username">
            Pseudo
         </label>
         <input type="text" placeholder="user42" name="username" id="username" required />
         <label for="password">
            Mot de passe
         </label>
         <input type="password" placeholder="********" name="password" id="password" required />
         <input type="submit" value="Se connecter">
      </form>
      <?php
      if (empty($_COOKIE["username"]) && empty($_COOKIE["password"])) {; ?>
         <p>
            Les cookies sont vides !<br />
            Vous pourrez soumettre à nouveau le formulaire pour modifier les cookies.
         </p>
      <?php } else {; ?>
         <p>
            Votre pseudo : <?= $_COOKIE["username"]; ?><br />
            Votre mot de passe : <?= $_COOKIE["password"]; ?>
         </p>
      <?php
      }; ?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
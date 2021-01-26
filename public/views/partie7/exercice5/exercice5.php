<?php
include $root . "public/includes/partie7/include_exercice5.php";
$pageTitle = "Exercice 5 - P7 - PHP";
$headTitle = "Exercice 5 - P7";
if (isset($_POST) && !empty($_POST)) {
   $username = isset($_POST["username"]) && !empty($_POST["username"]) ? $_POST["username"] : "";
   $password = isset($_POST["password"]) && !empty($_POST["password"]) ? password_hash($_POST["password"], PASSWORD_DEFAULT) : "";
   if (isset($_COOKIE["PHPSESSID"]) && isset($_COOKIE["username"]) && isset($_COOKIE["password"])) {
      // setcookie("PHPSESSID");
      // setcookie("username",false);
      // setcookie("password",false);
   }
   if (!isset($_COOKIE["username"]) && !empty($username) && !isset($_COOKIE["password"]) && !empty($password)) {
      setcookie("username", $username,0);
      setcookie("password", $password,0);
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
      <form action="<?= $_SERVER["REQUEST_URI"]; ?>" method="POST">
         <div class="form-part-1">
         <label for="username">
            Pseudo
         </label>
         <input type="text" placeholder="user42" name="username" id="username" required />
         <label for="password">
            Mot de passe
         </label>
         <input type="password" placeholder="********" name="password" id="password" required />
         <input type="submit" value="Se connecter">
         </div>
      </form>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
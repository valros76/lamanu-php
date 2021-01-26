<?php
include $root . "public/includes/partie7/include_exercice3.php";
$pageTitle = "Exercice 3 - P7 - PHP";
$headTitle = "Exercice 3 - P7";
if(isset($_POST) && !empty($_POST)){
   $username = isset($_POST["username"]) && !empty($_POST["username"]) ? $_POST["username"] : "";
   $password = isset($_POST["password"]) && !empty($_POST["password"]) ? password_hash($_POST["password"], PASSWORD_DEFAULT) : "";
   if(!empty($username) && !empty($password)){
      setcookie("username", $username, time()+60);
      setcookie("password", $password, time()+60);
      //NE JAMAIS REPRODUIRE LA LIGNE DU DESSUS !!! 😱
      //Cookie time : 60 secondes
   }
}
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur.<br/> 
      A la validation du formulaire, stocker les informations dans un cookie.
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <form action="<?= $_SERVER["REQUEST_URI"];?>" method="POST">
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
<?php
include $root . "public/includes/partie10/include_tp2.php";
$pageTitle = "TP 2 - P10 - PHP";
$headTitle = "TP 2 - P10";
$cdns = '<script defer src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyB1e4w9saEoKc4XeJIHy1nFYHcCNhNZPcI"></script>';
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016).
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <form action="?submit_form=p10tp2" method="POST">
         <select name="civilite" id="civilite">
            <option value="mr" selected>M.*</option>
            <option value="mme">Mme*</option>
         </select>
         <label for="firstname">Prénom*</label>
         <input type="text" placeholder="John" name="firstname" id="firstname" required />
         <label for="birthday">Date de naissance*</label>
         <input type="date" name="birthday" id="birthday" value="2005-01-01" min="1920-01-01" max="2005-01-01" required />
         <label for="state">Pays de naissance*</label>
         <input type="text" placeholder="France" name="state" id="state" required />
         <label for="nationality">Nationalité*</label>
         <input type="text" placeholder="Française" name="nationality" id="nationality" required />
         <label for="adress">Adresse*</label>
         <input type="text" placeholder="70 rue des Jacobins" name="adress" id="adress" required />
         <label for="cp">Code Postal*</label>
         <input type="number" placeholder="80000" name="cp" id="cp" minlength="5" maxlength="5" required/>
         <label for="city">Ville*</label>
         <input type="text" placeholder="Amiens" name="city" id="city" required />
         <label for="email">E-mail*</label>
         <input type="email" placeholder="first@mail.fr" name="email" id="email" required />
         <label for="phone">Numéro de téléphone*</label>
         <input type="tel" name="phone" id="phone" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}|(0|\+33)[1-9]( *[0-9]{2}){4}" value="+33" maxlength="12" required />
         <select name="diploma" id="diploma" required>
            <optgroup label="Niveau du diplôme">
               <option value="aucun" selected>Sans diplôme*</option>
               <option value="bac">Bac*</option>
               <option value="bac_2">Bac +2*</option>
               <option value="bac_3">Bac +3*</option>
               <option value="superieur">Supérieur*</option>
            </optgroup>
         </select>
         <label for="pole_emploi_id">Identifiant Pôle Emploi*</label>
         <input type="text" placeholder="8 à 12 caractères" name="pole_emploi_id" id="pole_emploi_id" minlength="8" maxlength="12" required/>
         <label for="nb_badges">Nombre de badges*</label>
         <input type="number" name="nb_badges" id="nb_badges" value="0" min="0" max="100" required/>
         <label for="codeacademy_links">Liens CodeAcademy*</label>
         <input id="codeacademy_links" name="codeacademy_links" type="url" placeholder="https://example.com" required>
         <label for="marvel">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?*</label>
         <textarea name="marvel" id="marvel" required></textarea>
         <label for="hacks">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)*</label>
         <textarea name="hacks" id="hacks" required></textarea>
         <label for="xp">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?*</label>
         <textarea name="xp" id="xp" required></textarea>
         <input type="submit" value="Valider">
      </form>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = '<script defer src="/public/sources/js/autocomplete_adress.js"></script>';
require_once $root . "/public/templates/default_template.php";; ?>
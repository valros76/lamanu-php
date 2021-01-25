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
      <div class="infos-container"><form action="?submit_form=p10tp2" method="POST" id="big-form">
         <div id="form-part-1">
            <select name="civilite" id="civilite" class="big-form-input">
               <option value="mr" selected>M.*</option>
               <option value="mme">Mme*</option>
            </select>
            <label for="firstname">Prénom*</label>
            <input type="text" placeholder="John" name="firstname" id="firstname" class="big-form-input" required />
            <label for="birthday">Date de naissance*</label>
            <input type="date" name="birthday" id="birthday" value="2005-01-01" min="1920-01-01" max="2005-01-01" class="big-form-input" required />
            <label for="state">Pays de naissance*</label>
            <input type="text" placeholder="France" name="state" id="state" class="big-form-input" required />
            <label for="nationality">Nationalité*</label>
            <input type="text" placeholder="Française" name="nationality" class="big-form-input" id="nationality" required />
            <a href="#form-part-2" data-cible="#form-part-2" data-part="1" data-direction="forward" class="form-links form-part-next">&rarr;</a>
         </div>
         <div id="form-part-2">
            <label for="adress">Adresse*</label>
            <input type="text" placeholder="70 rue des Jacobins" class="big-form-input" name="adress" id="adress" required />
            <label for="cp">Code Postal*</label>
            <input type="number" placeholder="80000" name="cp" id="cp" class="big-form-input" minlength="5" maxlength="5" required />
            <label for="city">Ville*</label>
            <input type="text" placeholder="Amiens" name="city" id="city" class="big-form-input" required />
            <label for="email">E-mail*</label>
            <input type="email" placeholder="first@mail.fr" name="email" id="email" class="big-form-input" required />
            <label for="phone">Numéro de téléphone*</label>
            <input type="tel" name="phone" id="phone" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}|(0|\+33)[1-9]( *[0-9]{2}){4}" value="+33" maxlength="12" class="big-form-input" required />
            <select name="diploma" id="diploma" class="big-form-input" required>
               <optgroup label="Niveau du diplôme">
                  <option value="aucun" selected>Sans diplôme*</option>
                  <option value="bac">Bac*</option>
                  <option value="bac_2">Bac +2*</option>
                  <option value="bac_3">Bac +3*</option>
                  <option value="superieur">Supérieur*</option>
               </optgroup>
            </select>
            <a href="#form-part-1" data-cible="#form-part-1" data-part="2" data-direction="back" class="form-links">&larr;</a>
            <a href="#form-part-3" data-cible="#form-part-3" data-part="2" data-direction="forward" class="form-links">&rarr;</a>
         </div>
         <div id="form-part-3"><label for="pole_emploi_id">Identifiant Pôle Emploi*</label>
            <input type="text" placeholder="8 à 12 caractères" name="pole_emploi_id" id="pole_emploi_id" minlength="8" maxlength="12" class="big-form-input" required />
            <label for="nb_badges">Nombre de badges*</label>
            <input type="number" name="nb_badges" id="nb_badges" value="0" min="0" max="100" class="big-form-input" required />
            <label for="codeacademy_links">Liens CodeAcademy*</label>
            <input id="codeacademy_links" name="codeacademy_links" type="url" placeholder="https://example.com" class="big-form-input" required>
            <label for="marvel">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?*</label>
            <textarea name="marvel" id="marvel" class="big-form-input" required></textarea>
            <label for="hacks">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)*</label>
            <textarea name="hacks" id="hacks" class="big-form-input" required></textarea>
            <label for="xp">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?*</label>
            <textarea name="xp" id="xp" class="big-form-input" required></textarea>
            <input type="submit" value="Valider" id="submit-form">
            <a href="#form-part-2" data-cible="#form-part-2" data-part="3" data-direction="back" class="form-links">&larr;</a>
         </div>
      </div>

      </form>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = '<script src="/public/sources/js/multi_form.js" async></script>';
require_once $root . "/public/templates/default_template.php";; ?>
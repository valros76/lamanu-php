<div class="infos-container">
         <form action="?submit_form=p10tp2" method="POST" id="big-form">
            <div id="form-part-1">
               <select name="civilite" id="civilite" class="big-form-input">
                  <option value="mr">M.*</option>
                  <option value="mme" selected>Mme*</option>
               </select>
               <label for="firstname">Prénom*</label>
               <input type="text" placeholder="John" name="firstname" id="firstname" value="Webdevoo" class="big-form-input" required />
               <label for="birthday">Date de naissance*</label>
               <input type="date" name="birthday" id="birthday" value="2005-01-01" min="1920-01-01" max="2005-01-01" value="1995-03-25" class="big-form-input" required />
               <label for="state">Pays de naissance*</label>
               <input type="text" placeholder="France" name="state" id="state" class="big-form-input" value="France" required />
               <label for="nationality">Nationalité*</label>
               <input type="text" placeholder="Française" name="nationality" class="big-form-input" id="nationality" value="Française" required />
         <a href="#form-part-2" data-cible="#form-part-2" data-part="1" data-direction="forward" class="form-links form-part-next">&rarr;</a>
            </div>
            <div id="form-part-2">
               <label for="adress">Adresse*</label>
               <input type="text" placeholder="70 rue des Jacobins" class="big-form-input" name="adress" id="adress" value="25 rue de la vallée" required />
               <label for="cp">Code Postal*</label>
               <input type="number" placeholder="80000" name="cp" id="cp" class="big-form-input" min="00000" max="99999" value="80132" required />
               <label for="city">Ville*</label>
               <input type="text" placeholder="Amiens" name="city" id="city" class="big-form-input" value="Cahon" required />
               <label for="email">E-mail*</label>
               <input type="email" placeholder="first@mail.fr" name="email" id="email" class="big-form-input" value="webdevoo.pro@gmail.com" required />
               <label for="phone">Numéro de téléphone*</label>
               <input type="tel" name="phone" id="phone" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}|(0|\+33)[1-9]( *[0-9]{2}){4}" value="+33750474757" maxlength="12" class="big-form-input" required />
               <select name="diploma" id="diploma" class="big-form-input" required>
                  <optgroup label="Niveau du diplôme">
                     <option value="aucun">Sans diplôme*</option>
                     <option value="bac">Bac*</option>
                     <option value="bac_2" selected>Bac +2*</option>
                     <option value="bac_3">Bac +3*</option>
                     <option value="superieur">Supérieur*</option>
                  </optgroup>
               </select>
               <a href="#form-part-1" data-cible="#form-part-1" data-part="2" data-direction="back" class="form-links">&larr;</a>
               <a href="#form-part-3" data-cible="#form-part-3" data-part="2" data-direction="forward" class="form-links">&rarr;</a>
            </div>
            <div id="form-part-3"><label for="pole_emploi_id">Identifiant Pôle Emploi*</label>
               <input type="text" placeholder="8 à 12 caractères" name="pole_emploi_id" id="pole_emploi_id" minlength="8" maxlength="12" class="big-form-input" value="3550871A" required />
               <label for="nb_badges">Nombre de badges*</label>
               <input type="number" name="nb_badges" id="nb_badges" value="45" min="0" max="100" class="big-form-input" required />
               <label for="codeacademy_links">Liens CodeAcademy*</label>
               <input id="codeacademy_links" name="codeacademy_links" type="url" placeholder="https://example.com" class="big-form-input" value="https://webdevoo.com  https://auxessenceselfiques.fr" required>
               <label for="marvel">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?*</label>
               <textarea name="marvel" id="marvel" class="big-form-input" required>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi enim dolores quisquam odit. Magni saepe enim sunt suscipit molestias aliquam ipsam error recusandae voluptates minus. Adipisci aliquid veniam alias explicabo.</textarea>
               <label for="hacks">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)*</label>
               <textarea name="hacks" id="hacks" class="big-form-input" required>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error blanditiis eum recusandae nisi, iste sint quos repellat nostrum minima qui illum facilis. Odio repellat exercitationem non, amet iste veritatis architecto.</textarea>
               <label for="xp">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?*</label>
               <textarea name="xp" id="xp" class="big-form-input" required>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi vero autem minus voluptatem accusamus, provident reprehenderit officiis ipsum obcaecati reiciendis voluptatum beatae, dolores voluptas modi ipsam rem cumque alias officia.</textarea>
               <input type="submit" value="Valider" id="submit-form">
               <a href="#form-part-2" data-cible="#form-part-2" data-part="3" data-direction="back" class="form-links">&larr;</a>
            </div>
         </form>
      </div>
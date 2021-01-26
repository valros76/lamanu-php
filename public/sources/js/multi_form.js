let links = document.getElementsByClassName('form-links')
let part_1 = document.getElementById("form-part-1")
let part_2 = document.getElementById("form-part-2")
let part_3 = document.getElementById("form-part-3")
let submit_input = document.getElementById("submit-form")
let form_inputs = document.getElementsByClassName("big-form-input")
let form = document.getElementById("big-form")
let infos_container = document.querySelector(".infos-container")
let cp = document.getElementById('cp');
const notyf = new Notyf({
   duration: 3000,
   dismissible: true,
   position: {
      x: "right",
      y: "top",
   },
   types: [
      {
         type: "info",
         background: "#57c357",
         dismissible: true,
      },
      {
         type: "error",
         background: "indianred",
         duration: 5000,
         dismissible: true,
      },
   ],
});

for (const link of links) {
   let cible = link.dataset.cible
   let actual_part = parseInt(link.dataset.part)
   let direction = link.dataset.direction
   link.addEventListener("click", (e) => {
      e.preventDefault();
      window.scroll(0, (form.offsetHeight / 4))
      switch (direction) {
         case 'forward':
            if (actual_part === 1) {
               part_1.classList.toggle("fade-exit-right")
               part_2.classList.toggle("fade-in-left")
               part_1.classList.remove("fade-in-left")
               part_1.classList.remove("fade-in-right")
               part_2.classList.remove("fade-exit-right")
               part_2.classList.remove("fade-exit-left")
            }
            if (actual_part === 2) {
               part_2.classList.toggle("fade-exit-right")
               part_3.classList.toggle("fade-in-left")
               part_2.classList.remove("fade-in-left")
               part_2.classList.remove("fade-in-right")
               part_3.classList.remove("fade-exit-right")
               part_3.classList.remove("fade-exit-left")
            }
            break;
         case 'back':
         default:
            if (actual_part === 2) {
               part_2.classList.toggle("fade-exit-left")
               part_1.classList.toggle("fade-in-right")
               part_2.classList.remove("fade-in-left")
               part_2.classList.remove("fade-in-right")
               part_1.classList.remove("fade-exit-right")
            }
            if (actual_part === 3) {
               part_2.classList.toggle("fade-in-left")
               part_2.classList.toggle("fade-in-right")
               part_3.classList.toggle("fade-exit-right")
               part_2.classList.remove("fade-exit-right")
               part_2.classList.remove("fade-in-left")
               part_3.classList.remove("fade-in-left")
               part_3.classList.remove("fade-exit-left")
            }
      }
   })
}

for (input of form_inputs) {
   input.addEventListener("blur", () => {
      console.log("test")
   })
}


submit_input.addEventListener("click", (e) => {
   e.preventDefault()
   let ajax = new XMLHttpRequest()
   ajax.open('POST', '?submit_form=p10tp2', true)
   ajax.onload = function (res) {
      // console.log("Form response : " + ajax.responseText);
      let resultat;
      let html;
      if (ajax.responseText && ajax.responseText != "") {
         resultat = JSON.parse(ajax.responseText);
         console.log(resultat)
         let links = []
         for(link in resultat.codeacademy_links){
               links.push(resultat.codeacademy_links[link])
         }
         links = links.join("")
         console.log(links)
         html = `
                  ${resultat["civilite"]}
                  ${resultat["firstname"]}
                  ${resultat["birthday"]}
                  ${resultat["state"]}
                  ${resultat["nationality"]}
                  ${resultat["adress"]}
                  ${resultat["cp"]}
                  ${resultat["city"]}
                  ${resultat["email"]}
                  ${resultat["phone"]}
                  ${resultat["diploma"]}
                  ${resultat["pole_emploi_id"]}
                  ${resultat["nb_badges"]}
                  ${links}
                  ${resultat["marvel"]}
                  ${resultat["hacks"]}
                  ${resultat["xp"]}
               `
         form.style.display = "none";
         infos_container.innerHTML += html

         notyf.open({
            type: "info",
            message: "Formulaire traité !",
            duration: 0,
         });
      } else {
         infos_container.innerHTML = `<p class="valid-para">Erreur : Information(s) invalide(s)</p>`
         notyf.open({
            type: "error",
            message: "Informations invalides !",
            duration: 0,
         })
      }
   }

   let data = new FormData();
   data.append("civilite", document.querySelector("#civilite").value)
   data.append("firstname", document.querySelector("#firstname").value)
   data.append("birthday", document.querySelector("#birthday").value)
   data.append("state", document.querySelector("#state").value)
   data.append("nationality", document.querySelector("#nationality").value)
   data.append("adress", document.querySelector("#adress").value)
   data.append("cp", document.querySelector("#cp").value)
   data.append("city", document.querySelector("#city").value)
   data.append("email", document.querySelector("#email").value)
   data.append("phone", document.querySelector("#phone").value)
   data.append("diploma", document.querySelector("#diploma").value)
   data.append("pole_emploi_id", document.querySelector("#pole_emploi_id").value)
   data.append("nb_badges", document.querySelector("#nb_badges").value)
   data.append("codeacademy_links", document.querySelector("#codeacademy_links").value)
   data.append("marvel", document.querySelector("#marvel").value)
   data.append("hacks", document.querySelector("#hacks").value)
   data.append("xp", document.querySelector("#xp").value)
   // Display the key/value pairs
   // for (var pair of data.entries()) {
   //    console.log(pair[0] + ' : ' + pair[1]);
   // }
   ajax.send(data)
})

if (cp) {
   cp.addEventListener("keyup", (e) => {
      if (cp.value.length > 5) {
         cp.value = cp.value.slice(0, 5);
      }
   })
}
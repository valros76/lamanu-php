let links = document.getElementsByClassName('form-links')
let part_1 = document.getElementById("form-part-1")
let part_2 = document.getElementById("form-part-2")
let part_3 = document.getElementById("form-part-3")
let submit_input = document.getElementById("submit-form")
let form_inputs = document.getElementsByClassName("big-form-input")
let form = document.getElementById("big-form")
let infos_container = document.querySelector(".infos-container")
let cp = document.getElementById('cp');
let actual_part = 1;
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

let appendHtmlResponse = (id, resultat) => {
   let response
   if (resultat.codeacademy_links) {
      let links = []
      for (link in resultat.codeacademy_links) {
         links.push(resultat.codeacademy_links[link])
      }
      links = links.join("")
   }
   switch (id) {
      case 'civilite':
         response = `${resultat["civilite"]}`
         break;
      case 'firstname':
         response = `${resultat["firstname"]}`
         break;
      case 'birthday':
         response = `${resultat["birthday"]}`
         break;
      case 'state':
         response = `${resultat["state"]}`
         break;
      case 'nationality':
         response = `${resultat["nationality"]}`
         break;
      case 'adress':
         response = `${resultat["adress"]}`
         break;
      case 'cp':
         response = `${resultat["cp"]}`
         break;
      case 'city':
         response = `${resultat["city"]}`
         break;
      case 'email':
         response = `${resultat["email"]}`
         break;
      case 'phone':
         response = `${resultat["phone"]}`
         break;
      case 'diploma':
         response = `${resultat["diploma"]}`
         break;
      case 'pole_emploi_id':
         response = `${resultat["pole_emploi_id"]}`
         break;
      case 'nb_badges':
         response = `${resultat["nb_badges"]}`
         break;
      case 'codeacademy_links':
         response = `${links}`
         break;
      case 'marvel':
         response = `${resultat["marvel"]}`
         break;
      case 'hacks':
         response = `${resultat["hacks"]}`
         break;
      case 'xp':
         response = `${resultat["xp"]}`
         break;
      default:
         response = 'Erreur !JS'
   }
   return response
}

let inputAjax = (input) => {
   let ajax = new XMLHttpRequest()
   ajax.open('POST', `?verif_form=${input.id}`, true)
   ajax.onload = function (res) {
      let resultat
      let html
      // console.log(ajax.responseText)
      if (ajax.responseText && ajax.responseText != "") {
         resultat = JSON.parse(ajax.responseText);
         //console.log(resultat)
         input.style.backgroundColor = "#B9EECD";
         // console.log(input)
      } else {
         input.style.backgroundColor = "#F25282";
      }
   }
   let data = new FormData()
   switch (input.id) {
      case 'civilite':
         data.append("civilite", document.querySelector("#civilite").value)
         break;
      case 'firstname':
         data.append("firstname", document.querySelector("#firstname").value)
         break;
      case 'birthday':
         data.append("birthday", document.querySelector("#birthday").value)
         break;
      case 'state':
         data.append("state", document.querySelector("#state").value)
         break;
      case 'nationality':
         data.append("nationality", document.querySelector("#nationality").value)
         break;
      case 'adress':
         data.append("adress", document.querySelector("#adress").value)
         break;
      case 'cp':
         data.append("cp", document.querySelector("#cp").value)
         break;
      case 'city':
         data.append("city", document.querySelector("#city").value)
         break;
      case 'email':
         data.append("email", document.querySelector("#email").value)
         break;
      case 'phone':
         data.append("phone", document.querySelector("#phone").value)
         break;
      case 'diploma':
         data.append("diploma", document.querySelector("#diploma").value)
         break;
      case 'pole_emploi_id':
         data.append("pole_emploi_id", document.querySelector("#pole_emploi_id").value)
         break;
      case 'nb_badges':
         data.append("nb_badges", document.querySelector("#nb_badges").value)
         break;
      case 'codeacademy_links':
         data.append("codeacademy_links", document.querySelector("#codeacademy_links").value)
         break;
      case 'marvel':
         data.append("marvel", document.querySelector("#marvel").value)
         break;
      case 'hacks':
         data.append("hacks", document.querySelector("#hacks").value)
         break;
      case 'xp':
         data.append("xp", document.querySelector("#xp").value)
         break;
      default:
         data = ""
   }
   // Display the key/value pairs
   // for (var pair of data.entries()) {
   //    console.log(pair[0] + ' : ' + pair[1]);
   // }


   if (data != "") {
      ajax.send(data)
   } else {
      ajax.send()
   }
}

if(document.querySelector('#civilite')){
   inputAjax(document.querySelector('#civilite'))
}
if(document.querySelector('#birthday')){
   inputAjax(document.querySelector('#birthday'))
}
if(document.querySelector('#diploma')){
   inputAjax(document.querySelector('#diploma'))
}

for (const input of form_inputs) {
   if(input.id != 'civilite'){
      input.addEventListener("keyup", (e) => {
         inputAjax(input)
      })
   }else{
      input.addEventListener("change", (e) => {
         inputAjax(input)
      })
   }
}


submit_input.addEventListener("click", (e) => {
   e.preventDefault()
   let ajax = new XMLHttpRequest()
   ajax.open('POST', '?submit_form=p10tp2', true)
   ajax.onload = function (res) {
      // console.log("Form response : " + ajax.responseText);
      let resultat
      let html
      if (ajax.responseText && ajax.responseText != "") {
         resultat = JSON.parse(ajax.responseText);
         // console.log(resultat)
         let links = []
         for (link in resultat.codeacademy_links) {
            links.push(resultat.codeacademy_links[link])
         }
         links = links.join("")
         // console.log(links)
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
}if (document.querySelector('#nb_badges')) {
   document.querySelector('#nb_badges').addEventListener("keyup", (e) => {
      if (document.querySelector('#nb_badges').value.length > 5) {
         document.querySelector('#nb_badges').value = document.querySelector('#nb_badges').value.slice(0, 3);
      }
      if(parseInt(document.querySelector('#nb_badges').value) > 100){
         document.querySelector('#nb_badges').value = 100;
         inputAjax(document.querySelector('#nb_badges'))
      }else if(parseInt(document.querySelector('#nb_badges').value) < 0){
         document.querySelector('#nb_badges').value = 0;
         inputAjax(document.querySelector('#nb_badges'))
      }
   })
}

document.addEventListener("keyup", (e)=>{
   let arrow_links = document.getElementsByClassName("form-links")
      switch(e.key){
         case 'ArrowRight':
            if(actual_part === 1){
               document.querySelector("#forward-to-2").click()
               actual_part = 2
            }else if(actual_part === 2){
               document.querySelector("#forward-to-3").click()
               actual_part = 3
            }
         break;
         case 'ArrowLeft':
            if(actual_part === 2){
               document.querySelector("#back-to-1").click()
               actual_part = 1
            }else if(actual_part === 3){
               document.querySelector("#back-to-2").click()
               actual_part = 2
            }
         break;
         default:
      }
      console.log(actual_part)
   
})
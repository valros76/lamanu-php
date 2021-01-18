//NEED button#spoilet-toggle AND p.important-para#spoiler
var spoiler_toggle = document.getElementById("spoiler-toggle")
var spoiler = document.getElementById("spoiler")
var state = false

if(spoiler_toggle){
   spoiler_toggle.addEventListener("click", (e) => {
      e.preventDefault()
      console.log("click")
      if (state != false) {
         spoiler.style.display = "none";
         state = false;
      } else {
         spoiler.style.display = "flex";
         state = true;
      }
   })
}
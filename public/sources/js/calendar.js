let calendar_days = document.querySelectorAll(".calendar-days")
let calendar_date = document.querySelector("#calendar-date")

calendar_days.forEach((day)=>{
   day.addEventListener("click", (e)=>{
      e.preventDefault();
      alert(`${day.dataset.day} ${day.textContent} ${calendar_date.textContent.trim()}`)
   })
})
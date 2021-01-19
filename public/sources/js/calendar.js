var calendar_days = document.querySelectorAll(".calendar-days")
var calendar_date = document.querySelector("#calendar-date")
const rndStrings = [
   "On va en terrasse !",
   "Tu ne paies que 850 euros pour 20 m2… Tu as trouvé LE plan en or !",
   "Tu ne m’emmèneras jamais sur les Champs Élysées. Plutôt mourir, c’est trop ringard.",
   "On commande un Uber ?",
   "Il faut se mettre dans ce wagon pour être face à la sortie",
   "Pour y aller ? On prend la 7bis… Hahaha",
   "Tu es allé dans le nouveau Bar à céréales ?",
   "On va se faire une session running ?",
   "Je pense investir dans un scoot. Je n’en peux plus du métro",
   "Le scandale ! Je dois attendre 4 minutes pour le prochain métro.",
   "Mon nouveau rencard ? Il est DJ... et barman",
   "Montreuil, c’est le nouveau Brooklyn",
   "8 euros la pinte ? C’est rien, il va devenir mon QG, ce bar !",
   "J’en peux plus de Paris, je partirai bien un an en Australie",
   "Je connais le meilleur japonais de Paris",
   "Je ne peux pas jeudi, j’ai méditation",
   "Ils sont insupportables ces touristes !",
   "On va bruncher dimanche ?",
   "Je dîne avec une copine, elle a choisi un resto dans le 15e. Qui va volontairement dans le 15e ?",
   "Elle pourrait se lever du strapontin, elle voit bien qu’il y a du monde dans le métro.",
   "Je suis “over-bookée” cette semaine. On peut se voir dimanche dans 15 jours si tu veux",
   "J’ai vu ton ex sur Tinder",
   "J’essaie de devenir végétarien(ne). J’en ai marre de la surconsommation… Et les animaux, c’est mignon",
   "C’est tellement “has-been”",
   "Qu’est ce que les gens sont cons !",
   "On va au Wanderlust, ce soir ?",
   "Je ne veux plus sortir avec des parisiennes, elles se prennent trop la tête",
   "Tu as vu la nouvelle collection The Kooples ? J’adore !",
   "Août c’est quand même le meilleur mois à Paris. Tous les parisiens partent en vacances",
   "Paris, c’est vraiment la plus belle ville du monde",
   "Go en afterwork faire un teambuilding, c’est smart !"
]

function rollDices(min, max) {
   min = Math.ceil(min)
   max = Math.floor(max)
   return Math.floor(Math.random() * (max - min +1)) + min
 }

calendar_days.forEach((day)=>{
   day.addEventListener("click", (e)=>{
      e.preventDefault();
      alert(`${day.dataset.day} ${day.textContent} ${calendar_date.textContent.trim()} : ${rndStrings[rollDices(0,30)]}`)
   })
})
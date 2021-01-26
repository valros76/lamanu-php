<?php
include $root . "public/includes/partie8/include_tp.php";
$pageTitle = "TP - P8 - PHP";
$headTitle = "TP - P8";
setlocale(LC_TIME, "fr");
$month = isset($_POST["month"]) && !empty($_POST["month"]) ? (int) $_POST["month"] : "";
$year = isset($_POST["year"]) && !empty($_POST["year"]) ? (int) $_POST["year"] : "";
$format = $year . "-" . $month . "-1";
$pick_date = strtotime($format);
$days_in_cal = (int) 35;
$days = [
   "lundi",
   "mardi",
   "mercredi",
   "jeudi",
   "vendredi",
   "samedi",
   "dimanche"
];
if (!empty($year) && !empty($month)) {
   $nb_days = $number = cal_days_in_month(CAL_GREGORIAN, $month, $year);
   $format_last = $year . "-" . $month . "-" . $nb_days;
   $first_day = strftime("%A", strtotime($format));
   $last_day = strftime("%A", strtotime($format_last));
}
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Faire un formulaire avec deux listes déroulantes.<br />
      La première sert à choisir le mois, et le deuxième permet d'avoir l'année.<br />
      En fonction des choix, afficher un calendrier comme celui-ci :
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <?php if (!empty($month) && !empty($year)) {; ?>
      <p>Cliquez sur les jours du mois pour lire aléatoirement une phrase de parisien (31 phrases à découvrir).</p>
         <div class="calendar-container">
            <table class="calendar">
               <caption id="calendar-date">
                  <?= utf8_encode(ucfirst(strftime("%B", $pick_date) . " " . strftime("%G", $pick_date))) ?>
               </caption>
               <thead>
                  <tr>
                     <?php
                     foreach ($days as $day) {
                        echo '<th>' . ucfirst($day) . '</th>';
                     }; ?>
                  </tr>
               </thead>
               <tbody>
                  <?php
                  if (isset($nb_days) && !empty($nb_days)) {
                     $week = 1;
                     $before_first_day = true;
                     $after_last_day = false;
                     for ($i = 1; $i <= $nb_days; $i++) {
                        echo '<tr>';
                        for ($count = 1; $count <= count($days); $count++) {
                           $iteration = $count;
                           if ($iteration === count($days) && $week <= 4) {
                              $week++;
                           }
                           if ($before_first_day === true) {
                              if ($days[$iteration - 1] === $first_day) {
                                 echo '<td class="calendar-days" data-day=' . $days[$iteration - 1] . '>' . $i . '</td>';
                                 $i++;
                                 $before_first_day = false;
                              } else {
                                 echo '<td class="null-days">&nbsp;</td>';
                              }
                           } else {
                              if ($i <= $nb_days && $iteration < count($days)) {
                                 echo '<td class="calendar-days" data-day=' . $days[$iteration - 1] . '>' . $i . '</td>';
                                 $i++;
                              } else if ($i <= $nb_days && $iteration === count($days)) {
                                 echo '<td class="calendar-days" data-day=' . $days[$iteration - 1] . '>' . $i . '</td>';
                              } else {
                                 echo '<td class="null-days">&nbsp;</td>';
                              }
                           }
                        }
                        echo '</tr>';
                     }
                  }; ?>
               </tbody>
            </table>
         </div>
      <?php }; ?>
      <form action="<?= $_SERVER["REQUEST_URI"]; ?>" method="POST">
         <div id="form-part-1">
            <select name="month" id="month">
               <option value="1" selected>Janvier</option>
               <option value="2">Février</option>
               <option value="3">Mars</option>
               <option value="4">Avril</option>
               <option value="5">Mai</option>
               <option value="6">Juin</option>
               <option value="7">Juillet</option>
               <option value="8">Août</option>
               <option value="9">Septembre</option>
               <option value="10">Octobre</option>
               <option value="11">Novembre</option>
               <option value="12">Décembre</option>
            </select>
            <select name="year" id="year">
               <option value="2021" selected>2021</option>
               <?php
               for ($i = 2020; $i >= 1970; $i--) {
                  echo '<option value="' . $i . '">' . $i . '</option>';
               }; ?>
            </select>
            <input type="submit" value="Afficher">
         </div>
      </form>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = '<script src="/public/sources/js/calendar.js"></script>';
require_once $root . "/public/templates/default_template.php";; ?>
<?php
include $root . "public/includes/partie8/include_tp.php";
$pageTitle = "TP - P8 - PHP";
$headTitle = "TP - P8";
setlocale(LC_TIME, "fr");
$month = isset($_POST["month"]) && !empty($_POST["month"]) ? (int) $_POST["month"] : "";
$year = isset($_POST["year"]) && !empty($_POST["year"]) ? (int) $_POST["year"] : "";
$format = $year . "-" . $month . "-1";
$pick_date = strtotime($format);
$nb_days = $number = cal_days_in_month(CAL_GREGORIAN, $month, $year);
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
      <form action="<?= $_SERVER["REQUEST_URI"]; ?>" method="POST">
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
      </form>
      <?php if (!empty($month) && !empty($year)) {; ?>
         <div class="calendar-container">
            <table>
               <caption>
                  <?= utf8_encode(ucfirst(strftime("%B", $pick_date) . " " . strftime("%G", $pick_date))) ?>
                  <p>Premier jour du mois : <?= utf8_encode(strftime("%A", date($pick_date)));; ?></p>
               </caption>
               <thead>
                  <tr>
                     <th>Lundi</th>
                     <th>Mardi</th>
                     <th>Mercredi</th>
                     <th>Jeudi</th>
                     <th>Vendredi</th>
                     <th>Samedi</th>
                     <th>Dimanche</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                  for ($i = 1; $i <= $nb_days; $i++) {
                     if($i >= 1 && $i <= 7){
                        echo '<tr>';
                        echo '<td>' . $i . '</td>';
                     }else{
                        echo '</tr>';
                     }
                     // switch (true) {
                     //    case ($i === 1):
                     //       echo '<tr>';
                     //       echo '<td>' . $i . '</td>';
                     //       break;
                     //    case ($i <= 6):
                     //       echo '<td>' . $i . '</td>';
                     //       break;
                     //    case ($i === 7):
                     //       echo '<td>' . $i . '</td>';
                     //       echo '</tr>';
                     //       break;
                     //    case ($i === 8):
                     //       echo '<tr>';
                     //       echo '<td>' . $i . '</td>';
                     //       break;
                     //    case ($i > 8 && $i <= 13):
                     //       echo '</tr>';
                     //       echo '<td>' . $i . '</td>';
                     //       break;
                     //    case ($i === 14):
                     //       echo '<td>' . $i . '</td>';
                     //       echo '</tr>';
                     //       break;
                     //    case ($i === 15):
                     //       echo '<tr>';
                     //       echo '<td>' . $i . '</td>';
                     //       break;
                     //    case ($i > 15 && $i <= 20):
                     //       echo '</tr>';
                     //       echo '<td>' . $i . '</td>';
                     //       break;
                     //    case ($i === 21):
                     //       echo '<td>' . $i . '</td>';
                     //       echo '</tr>';
                     //       break;
                     //    case ($i === 22):
                     //       echo '<tr>';
                     //       echo '<td>' . $i . '</td>';
                     //       break;
                     //    case ($i > 22 && $i <= 27):
                     //       echo '</tr>';
                     //       echo '<td>' . $i . '</td>';
                     //       break;
                     //    case ($i === 28):
                     //       echo '<td>' . $i . '</td>';
                     //       echo '</tr>';
                     //       break;
                     //    case ($i > 29 && $i <= 30):
                     //       echo '</tr>';
                     //       echo '<td>' . $i . '</td>';
                     //       break;
                     //    case ($i === 31):
                     //       echo '</tr>';
                     //       echo '<td>' . $i . '</td>';
                     //       break;
                     //    default:
                     // }
                  }; ?>
               </tbody>
            </table>
         </div>
      <?php }; ?>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
require_once $root . "/public/templates/default_template.php";; ?>
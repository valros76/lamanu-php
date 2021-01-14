<?php
include $root . "public/includes/partie2/include_exercice8.php";
$pageTitle = "Exercice 8 - P2 - PHP";
$headTitle = "Exercice 8 - P2";
ob_start();; ?>

<section class="main-sections">
   <h2 class="main-sections-title">
      Consigne
   </h2>
   <p class="main-sections-description">
      Traduire ce code avec des if et des else :
   <p class="important-para">
      &lt?php<br/>
      $number = 11;<br/>
      echo ($number % 5 == 0 && $number % 3 == 0) ? 'FizzBuzz' : ($number % 3 == 0 ? 'Fizz' : ($number % 5 == 0 ? 'Buzz' : $number));
      ?>
      </pre>
   </p>
   <article class="main-articles">
      <h3 class="main-articles-title">
         Rendu visuel
      </h3>
      <button id="spoiler-toggle">Afficher le code PHP</button>
      <p class="important-para" id="spoiler">
         if ($number % 5 == 0 && $number % 3 == 0) { <br />
            echo "FizzBuzz"; <br />
         } else if($number % 3 == 0) { <br />
            echo "Fizz"; <br />
         } else {<br/>
            if($number % 5 == 0) { <br />
            echo "Buzz"; <br />
         }else{ <br />
            echo $number; <br />
         }<br />
      }
      </p>
   </article>
</section>

<?php
$mainContent = ob_get_clean();
$scripts = "<script src='public/sources/js/spoiler.js'></script>";
require_once $root . "/public/templates/default_template.php";; ?>
<?php
$gender = (string) null;
   function showConsigne($gender){
      echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
   }
;?>
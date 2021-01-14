<?php
   $number = 11;
   function showConsigne($nbr){
    echo ($nbr % 5 == 0 && $nbr % 3 == 0) ? 'FizzBuzz' : ($nbr % 3 == 0 ? 'Fizz' : ($nbr % 5 == 0 ? 'Buzz' : $nbr));
   }
;?>
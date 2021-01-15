<?php
   function getSum(int $nbr1 = 1, int $nbr2 = 2, int $nbr3 = 3){
      return $nbr1 + $nbr2 + $nbr3;
   }

   function aleaSum(int ...$nbrs){
      $result = 0;
      foreach($nbrs as $nbr){
         $result += $nbr;
      }
      return $result;
   }
;?>
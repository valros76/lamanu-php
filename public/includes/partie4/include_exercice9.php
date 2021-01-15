<?php
   function returnBiggest(int $nbr1,int $nbr2){
      $sort = [$nbr1, $nbr2];
      return max($sort);
   }

   function returnBiggestAlea(int ...$nbrs){
      $sort = [];
      foreach($nbrs as $nbr){
         $sort[] += $nbr;
      }
      return max($sort);
   }
;?>
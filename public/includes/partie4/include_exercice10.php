<?php
   function calcFactoriel(int $nbr){
      if($nbr <= 100){
         $fact = 1;
         for($i = 1; $i <= $nbr; $i++){
            $fact = $fact * $i;
         }
         return "<p>".strval($fact)."</p>";
      }else{
         $result = calcGmpFact($nbr);
         return "<p>".$result."</p>";
      }
   }

   function calcGmpFact(int $nbr){
      $fact = gmp_fact($nbr);
      return gmp_strval($fact);
   }

   function calcRecursive($nbr, $count){
      if($count > 0){
         return "<p>".calcRecursive(($nbr*$nbr),$count - 1)."</p>";
      }
      return $nbr;
   }
;?>
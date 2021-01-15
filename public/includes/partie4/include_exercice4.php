<?php
function compareIntNumbers(int $nbr1,int $nbr2){
   $message = (string) "Erreur de calcul.";
   if($nbr1 > $nbr2){
      $message = "Le premier nombre est plus grand.";
   }else if($nbr1 < $nbr2){
      $message = "Le premier nombre est plus petit.";
   }else{
      $message = "Les deux nombres sont identiques";
   }
   return $message;
}

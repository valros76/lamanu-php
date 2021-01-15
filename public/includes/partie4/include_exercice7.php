<?php
        function sayHello(int $age, string $gender){
                $gender = strtolower($gender);
                $message = "Erreur dans la fonction ou les paramètres.";
                if ($age > 18){
                        if($gender === "homme"){
                                $message = "Vous êtes un homme et vous êtes majeur";
                        }else{
                                $message = "Vous êtes une femme et vous êtes majeure";
                        }
                }else{
                        if($gender === "homme"){
                                $message = "Vous êtes un homme et vous êtes mineur";
                        }else{
                                $message = "Vous êtes une femme et vous êtes mineure";
                        } 
                }
                return $message;
        }
;

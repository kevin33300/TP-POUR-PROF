<?php

    // Exercice 2-1 : Palindrome

    $string= "radar";
    $motalendroit = "";
    $motalenvers = "";
    // boucle pour lire à l'endroit 
    for ($i=0;$i<strlen($string);$i++) {
        $motalendroit .= $string[$i];
    }

    //  boucle pour lire à l'envers
    for ($j=strlen($string)-1;$j>=0;$j--) {
        $motalenvers .= $string[$j];
    }
    // Comparaison des deux variables:
    if ($motalendroit === $motalenvers) {
        echo ("C'est un Palindrome \n ");
        
    }
        else {
            echo ("Ce n'est pas un Palindrome \n ");
        }
        
// ----------------------------------------------------------------------------------------------------------------------------------

    // Exercice 2-2 : Anagramme 
    
    // définition des variables:
    $mot1="rio";
    $mot2="oir";

    // transformation des string en tableau 
    $mot1tri= str_split("$mot1");
    $mot2tri= str_split("$mot2");

    // ici on classe le tableau par ordre alphabétique et on les affiches: 
    sort($mot1tri); sort($mot2tri);
      
    
    if ($mot1tri === $mot2tri) {
        echo 'C est un Anagramme';
    }
        else {
            echo 'Ce n est pas un Anagramme';
        }
    


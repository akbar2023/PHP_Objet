<?php
// 06 - Surcharge-abstraction-finalisation-interface-trait
    // surcharge.php


// Surcharge (Override) : L'idée de modifier en partie le comportement d'une méthode héritée

// surcharge != redéfinition

class A {
    public function calcul () {
        return 10;
    }
}

class B extends A { // B hérite de A
    // return 15;
    // return $this -> calcul() +5; // impossible car récursif (la fonction appelle elle même)
    public function calcul () {
        return parent::calcul() + 5;
        // OK permet d'appeler le comportement de la méthode calcul() telle que définie dans la classe parente.
    }
   
}

$b = new B;
echo $b -> calcul();

/* 
Commentaires :
    - La surcharge est une notion importante car elle permet de modifier le comportement d'une fonction héritée. Exemple : on souhaite modifier le comportement d'une fonction déclarée d'une application sans avoir a modifier le coeur de l'application
*/

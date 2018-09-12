<?php
// finalisation.php

final class Application {
    public function run () {
        return 'L\'application se lance !';
    }
}

// class Extension extends Application {} // ERREUR : On ne peut pas hériter d'une class 'final'

$app = new Application; // une classe finale peut être instanciée
$app -> run();

// ----------
class Application2 {
    final public function run2 () {
        return 'L\'application se lance !';
    }
}

class Extension2 extends Application2 {

    // public function run2 () {} // ERREUR : on ne peut pas redéfinir ou surcharger une méthode finale, mais elle est héritée
}

/* 
Commentaires :
    - Une classe finame ne peut pas être héritée
    - Une classe finame peut être instanciée
    - par définition une classe finale ne contient que des méthodes finale... puisqu'on ne peut pas en hériter

    - Une méthode finale ne peut être surchargée ou redéfinie
    - Une méthode finale peut être peut être présente dans une classe normale

*/
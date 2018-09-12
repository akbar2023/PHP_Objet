<?php


class Animal {

    public function manger() {
        return 'Je mange !';
    }

    protected function deplacement() {
        return 'Je me déplace';
    }
}

// ----------------

class Elephant extends Animal { // "extends" signifie que la class 'Elephant' hérite de la classe 'Animal'

    public function quiSuisJe() {
        return 'Je suis un éléphant et ' . $this -> deplacement();
    }

    
}

// ----------------

class Chat extends Animal {
    public function quiSuisJe() {
        return 'Je suis un chat';
    }

    public function manger() { // Redéfinition de la méthode (comme la fonction existe dans cette classe, du coup le lecteur du script ne vas pas chercher celui du parent, et donc exécute celle-ci ici présente)
        return 'Je mange peu !';
    }


}


// ----------------

// Elephant :
$eleph = new Elephant;

echo 'Elephant > ' . $eleph -> manger() . '<br>';
echo 'Elephant > ' . $eleph -> quiSuisJe() . '<br>';

// Chat :

$chat = new Chat;

echo 'Chat > ' . $chat -> manger() . '<br>';
echo 'Chat > ' . $chat -> quiSuisJe() . '<br>';

/* 
Commentaires :
    - L'héritage est l'un des fondements de la programmation en objet.

    - Lorsqu'une classe hérite d'une autre classe, c'est comme si tout le code du parent était importé. Les éléments (Non private) sont donc accessibles avec '$this ->'

    - Redéfinition : une classe enfant (héritière) peut modifier le comportement global d'une méthode dont elle a héritée.

    - Surcharge : Une classe enfant (héritière) peut modifier EN PARTIE le comportement d'une méthode dont elle a hérité (voir chapitre 06, fichier surcharge.php)   redéfinition != surcharge

    -Dans le cas de l'héritage, l'interprtéeur va regarder dans la classe enfant si les méthodes exécutées existent, et si elle ne trouve pas elle regarde dans la classe parente.
*/


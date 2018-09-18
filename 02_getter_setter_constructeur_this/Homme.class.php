<?php

// Homme.class.php

class Homme {

    private $prenom;
    private $nom;

    public function setPrenom ($argument) {
        if(is_string($argument)) {
            if(strlen($argument) > 5 && strlen($argument) < 30) {
                
                $this -> prenom = $argument;
            }
        }
    }

    public function getPrenom () {
        return $this -> prenom;
    }

    public function setNom($nom) {
        $this -> nom = $nom;
    }

    public function getNom () {
        return $this -> nom;
    }


}
//---------
$homme = new Homme;
// $homme -> prenom = 'Akbar'; // Erreur : impossible d'accèder à un élément 'private' depuis l'extérieur de la classe.

$homme -> setPrenom('Akbarr');

echo 'Bonjour ' . $homme -> getPrenom() . '! <br>';

$homme -> setNom('KHAN');

echo 'Nom ' . $homme -> getNom() . '! <br>';

/* 
Commentaires : 
    - Pourquoi faire de getters et des setters ?
    Le PHP est un langage qui ne type pas ses variables... Il faut donc constamment vérifier l'intégrité des données.
    Mettre une propriété en visibilité private, et donc passer par les accesseurs (getter / setter), permet de vérifier à un seul (une seul fois) les données.
    C'EST UNE BONNE CONTRAINTE !!
    Tout dev' qui voudra affecter une valeur devra passer par le setter.

    $this : représente l'objet en cours de manipulation.

    Getter : Accéder !
    Setter : Affecter 

    Nous aurons autant de getter et de setter que de propriétés PRIVATE.

*/

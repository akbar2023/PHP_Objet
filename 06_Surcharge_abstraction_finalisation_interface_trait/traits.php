<?php

// traits.php

// Attention : Les traits existent depuis PHP 5.4

trait TPanier {

    public $nbProduit = 1;

    public function affichagePanier() {
        return 'Affichage du panier';
    }
}
// ---------
trait TMembre {
    public function connexion () {
        return 'Je me connecte';
    }
}

// -------

class Site {
    use TPanier;
    use TMembre;
    //ou alors : use TPanier, TMembre;
    // use permet d'importer le code contenu dans un trait
}

// -------
$site = new Site;
echo $site -> affichagePanier() . '<br>';
echo $site -> connexion() . '<br>';

/* 
Commentaires :
    - Les traits permettent d'importer du code dans une classe
    - Cela repousse l'héritage non multiple du PHP
    - Une classe peut importer plusieurs traits ('use Trait')
    - Un trait peut importer un trait
*/
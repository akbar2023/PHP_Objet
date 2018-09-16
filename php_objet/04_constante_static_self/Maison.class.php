<?php

// Maison.class.php

class Maison {
    public $couleur = 'blanc'; // Appartient à l'objet
    public static $espaceTerrain = '500m2'; // Appartient à la classe
    private $nbPorte = 10; // appartient à l'objet
    private static $nbPiece = 7; // appartient à la classe
    const HAUTEUR = '10m'; // Apparient à la classe

    public function getNbPorte() {
        return $this -> nbPorte;
    }

    public static function getNbPiece() {
        // return Maison::$nbPiece
        return self::$nbPiece; // "self" fait référence à la classe (Maison)
    }



}
// -------



$maison = new Maison;
echo 'Couleur : ' . $maison -> couleur . '<br>';  // OK, j'accède à un élément public à l'extérieur de la classe.

echo 'Hauteur : ' . Maison::HAUTEUR . '<br>'; // ok

// echo 'Terrain : ' . $maison -> espaceTerrain . '<br>';

echo 'Terrain : ' . Maison :: $espaceTerrain . '<br>'; // OK, je fais appel un élément de la classe via le nom de la classe.

// echo 'Porte : ' . $maison -> nbPorte . '<br>'; // Erreur, accessible uniquement dans la classe (getter) car private.

echo 'Portes : ' . $maison -> getNbPorte() . '<br>'; // Ok, j'accède à un élément private en dehors de la classe, grâce à son getter.

// echo 'Piece : ' . Maison::$nbPiece . '<br>'; // Erreur : Private
echo 'Piece : ' . Maison::getNbPiece() . '<br>'; //OK


/* 

    Opérateurs :
        - $objet ->   : Element à l'extérieur de la classe
        - $this ->    : Element à l'intérieur de la classe
        - Class::     : Element d'une classe (static, const) à l'extérieur de la classe
        - self::      : Element d'une Classe (static, const) à l'intérieur de la classe


        2 questions à se poser :
            - Est-ce static ?
                - OUI : 
                    - Suis-je à l'intérieur de la classe ?
                    ----> oui : self::
                    ----> non : Class::
                - NON :
                    - Suis-je à l'intérieur de la classe ?
                        - oui : $this ->
                        - non : $objet ->

    static signifie q'un élément (propriété ou méthode) appartient à la Classe. On y accède donc avec Class:: ou self::. Un élément static peut-être modifié, mais le sera de manière durable.

    const signifie qu'un élément (propriété) appartient à la classe, mais ne peut pas être modifié.

*/

<?php
    // exercice3.php

/* 
    CONSIGNES :0- Créer les getters et setters

1- Création d'un véhicule

2- Attribuer un nombre de litre d'essence au véhicule (5L)

3- Afficher le nombre de litre d'essence dans le véhicule

4- La capacité max du réservoir du véhicule est de 50L (50)

5- creation d'une pompe

6- Attribuer un nombre de litre d'essence à la pompe (800L)

7- Afficher le nombre de litre d'essence dans la pompe

8- La pompe donne de l'essence au véhicule et fait le plein

9- Afficher le nombre de litre d'essence dans le véhicule après ravitaillement

10- Afficher le nombre de litre d'essence dans la pompe après ravitaillement!! Le véhicule ne peut pas recevoir plus que la capacité max de son réservoir !!

*/


class Vehicule 
{
    private $litre;
    private $reservoire;

    public function setLitre($litre) {
        $this -> litre = $litre; // 5L
    }

    public function getLitre() { 
        return $this -> litre;
    }

    public function setReservoire($res) {
        $this -> reservoire = $res;
    }

    public function getReservoire() {
        return $this -> reservoire;
    }
}

class Pompe 
{
    private $litre;

    public function setLitre($litre) {
        $this -> litre = $litre;
    }

    public function getLitre() {
        return $this -> litre;
    }

    public function donneEssence(Vehicule $v) { // LA fonction donneEssence() est programmé pour recevoir un argument ($v) du type Objet de la classe Vehicule
        // Modifier l'objet pompe ($this)
        // Le volume de litre dans pompe est maintenant égal à l'ancien volume moins (le reservoire de $v moins le nbr de litre dans $v)
        $this -> setLitre($this -> getLitre() - ($v -> getReservoire() - $v -> getLitre() ) );
        // 745 = 800 - (50 - 5)

        // Modifier l'objet vehicule ($v)
        $v -> setLitre($v -> getReservoire() );
        // 50 = 5 + (50 - 5)
        // 50 = 50
    }

}

$clio = new Vehicule;

$clio -> setLitre(5);

echo '<div>Le véhicule contient ' . $clio -> getLitre() . 'L.</div>';

// div d'espacement
echo '<div style="height: 20px"> </div>';

$clio -> setReservoire(50);

echo '<div>Le véhicule a une capacité de : ' . $clio -> getReservoire() . 'L.</div>';


$p = new Pompe;


// div d'espacement
echo '<div style="height: 20px"> </div>';

$p -> setLitre(200);

echo '<div>La pompe possède ' . $p -> getLitre() . 'L d\'eesence.</div><hr>';

$p -> donneEssence($clio);
echo 'Après ravitaillement <br>';
echo 'Le véhicule contient ' . $clio -> getLitre() . 'L.<br>';
echo 'La pompe contient ' . $p -> getLitre() . 'L d\'essence.';





<?php

class Competence {

    private $competence;

    public function setCompetence($comp) {
        if(is_string($comp)){
            return $this -> competence = $comp;
        }
    }

    public function getCompetence() {
        return $this -> competence;
    }

    private $niveau;

    public function setNiveau($niv) {
        if(is_numeric($niv)){
            return $this -> niveau = $niv;
        }
    }

    public function getNiveau() {
        return $this -> niveau;
    }

    private $categorie = array('language', 'CMS', 'Framework');

    public function getCategorie($indCat) {
        if($indCat == 0) {
            return $this -> categorie[0];
        } elseif($indCat == 1) {
            return $this -> categorie[1];
        } elseif($indCat == 2){
            return $this -> categorie[2];
        }
    }

}

$php = new Competence;

$php -> setCompetence('PHP');

echo 'Compétence : ' . $php -> getCompetence() . '<br>';

$php -> setNiveau(70);

echo 'Niveau : ' . $php -> getNiveau() . '<br>';

echo 'Catégorie : ' . $php -> getCategorie(0) . '<br>';




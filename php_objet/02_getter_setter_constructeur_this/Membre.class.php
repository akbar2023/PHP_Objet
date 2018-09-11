<?php
// Membre.class.php

// Consignes : Au regard de la class ci-dessous, veuillez affecter des valeurs à $pseudo et $email et les afficher dans la page.

class Membre 
{
    private $pseudo;
    private $email;

    
    public function setPseudo($pseudo) 
    {
        $this -> pseudo = $pseudo;
    }

    public function getPseudo () 
    {
        return $this -> pseudo;
    }

    public function setEmail($email) 
    {
        if(FILTER_VAR($email, FILTER_VALIDATE_EMAIL)) 
        {
            $this -> email = $email;
        }
    }

    public function getEmail () {
        return $this -> email;
    }


}

$membre = new Membre;

$membre -> setPseudo('admin');

echo 'Votre pseudo est : ' . $membre -> getPseudo() . '<br>';

$membre -> setEmail('admin.ad@mail.com');

echo 'Votre email est : ' . $membre -> getEmail() . '<br>';
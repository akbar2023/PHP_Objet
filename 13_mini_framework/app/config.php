<?php

//  app/config.php


class Config {
    protected $parameters;
    public function __construct() {
        require __DIR__ . '/Config/parameters.php';
        $this -> parameters = $parameters;
        // Lorsque j'instancie cette classe, je récupère automatiquement le fichier parameters.php et je stocke la variable $parameters dans la propriété parameters
    }

    public function getParametersConnect() {
        return $this -> parameters['connect'];
        // Cette fonction va retourner seulement la partir 'connect' de parameters.

    }

    Public function getParametersUrl() {
        return $this -> parameters['url'];
    }


}

// --------

// $config = new Config;

// echo '<pre>';
//     print_r($config -> getParametersConnect() );
// echo '<pre>';

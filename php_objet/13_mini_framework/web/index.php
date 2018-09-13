<?php
session_start();

require_once(__DIR__ . '/../vendor/autoload.php');

// $app = new Manager\Application;
// $app -> run();



// TEST 1 : Entity
// = new Entity\Produit;

// $produit -> setTitre('Mon super produit');

// echo $produit -> getTitre();

// $membre = new Entity\Membre;
// $membre -> setPseudo('AkbarLeGRand');

// echo '<br>' . $membre -> getPseudo();


// TEST 2

$pdo = Manager\PDOManager::getInstance() -> getPdo();
$resultat = $pdo -> query("SELECT * FROM produit");
$produits = $resultat -> fetchAll();

echo '<pre>';
print_r($produits);
echo '</pre>';

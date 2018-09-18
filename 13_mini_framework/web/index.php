<?php
session_start();

require_once(__DIR__ . '/../vendor/autoload.php');

$app = new Manager\Application;
$app -> run();

// index.php/   produit     /   afficheall      
// index.php/   produit     /   affiche     /2
// index.php/   produit     /   categorie   /pull

// www.monsite.com/produit/afficheall



// TEST 1 : Entity
// = new Entity\Produit;

// $produit -> setTitre('Mon super produit');

// echo $produit -> getTitre();

// $membre = new Entity\Membre;
// $membre -> setPseudo('AkbarLeGRand');

// echo '<br>' . $membre -> getPseudo();


// TEST 2

// $pdo = Manager\PDOManager::getInstance() -> getPdo();
// $resultat = $pdo -> query("SELECT * FROM produit");
// $produits = $resultat -> fetchAll();

// echo '<pre>';
// print_r($produits);
// echo '</pre>';

// TEST 3 : EntityRepository
// Attention : Pour tester ce fichier il faut simuler que l'on soit dans une entité partisulière en précisant 'return Produit' (exemple) dans la fonction getTableName(); Pour la suit eon remettra la fonction dans son état initial.

// $er = new Repository\EntityRepository;

// $produit = $er -> findAll();

// $newProduit = array(
//     'reference' => 'pantalon coton',
//     'categorie' => 'chino',
//     'titre' =>  'Chino Dockers',
//     'description' => 'en coton bio',
//     'public' => 'm',
//     'taille' => 'm',
//     'couleur' => 'Bleu nuit',
//     'prix' => 35,
//     'stock' => 200
// );

// $er -> register($newProduit);
// $er -> delete(5);


// echo '<pre>';
// print_r($produit);
// echo '</pre>';


// TEST 4

// $pr = new Repository\ProduitRepository;

// $produits = $pr -> getAllProduit();

// $pdt = $pr -> getProduitById(2);

// $categories = $pr -> getAllCategorie();

// $produit_cat = $pr -> getAllProduitByCategorie('chino');


// echo '<pre>';
// print_r($produits);
// print_r($pdt);
// print_r($categories);
// print_r($produit_cat);
// echo '</pre>';

// TEST 5 : ProduitController

// $pc = new Controller\ProduitController;
// $pc -> afficheall();
// $pc -> affiche(5);


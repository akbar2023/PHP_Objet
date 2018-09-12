<?php

/* 
Les différentes fonctions pour exécuter une requête :

    query() : -  SELECT - SHOW
                - Succès : PDOStatement (obj)
                - Echec : FALSE (Bool)

    exec() : - INSERT - DELETE - REPLACE - UPDATE
                - Succès : X (int) correspond au nombre d'enregistrement affectés par la requête.
                - Echec : FALSE (Bool)

    prepare() + execute() : 
            - Dès qu'on a une information sensible (GET / POST) dans la requête.
            -> prepare() :
                - Succès : PDOStatement (obj)
                - Echec : FALSE (Bool)

            -> execute() :
                - Succès : True (Bool)
                - Echec : False (Bool0) 

*/

// 1 : Connexion sans erreur :
// $pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '');

// $requltat = $pdo -> query("dsjfdl");
// Les erreurs ne s'affichent pas.


// 2 : Connexion en mode erreur Warning :
// $pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '', array(
//     PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
// ));

// $requltat = $pdo -> query("dsjfdl");

// 3 : Connexion en mode erreur Exception :
$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '', array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
));


try {
    // $requltat = $pdo -> query("dsjfdl");

    $prenom = 'Amandine';
    $nom = 'Thoyer';

    // marqueur ? :
    $resultat = $pdo -> prepare("SELECT * FROM employes WHERE prenom = ? AND nom = ?");

    $resultat -> execute(array(
        $prenom,
        $nom
    ));

    // Marqueur nominatif ':' :
    $resultat = $pdo -> prepare("SELECT * FROM employes WHERE prenom = :prenom AND nom = :nom");
    
    $resultat -> execute(array(
        ':nom' => $nom,
        ':prenom' => $prenom
    ));

}


catch (PDOException $e) {
    // echo '<div style="background:red;padding:10px;color:white;">';
    // echo 'Erreur SQL : <br>';
    // echo 'Erreur : ' . $e -> getMessage() . '<br>';
    // echo 'Fichier : ' . $e -> getFile() . '<br>';
    // echo 'Ligne : ' . $e -> getLine() . '<br>';
    // echo '</div>';

    $f = fopen('erreur.txt', 'a');
    $ligne = 'Erreur SQL : ' . date('d/m/Y h:i:s') . "\r\n"; // "\r\n" permet de passer à la ligne dans le code source
    fwrite($f, $ligne);
    exit;

}
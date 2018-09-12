<?php




namespace Application;

use Espace1, Espace2;

require 'espace1.php';
require 'espace2.php';

$c = new Espace1\A;
echo $c -> test1() . '<hr>';

$d = new Espace2\A;
echo $d -> test2();

/* 
Commentaires: 
    - Les namespace sont des espaces VIRTUELLES, qui nous permettent d'organiser / ranger nos classes. De cette manière si deux dev' créent deux classes nommées à l'identique, cela ne pose aucun problème.

    - On peut voir les namespaces comme des tiroirs pour ranger les classes.

    - On déclare les namespaces obligatoirement en haut de chaque fichier.

    - Lorsqu'on utilise les namespaces :
        1) on appelle une classe avec son nom complet. 
            ex : $a = new Espace1\A;
        2) On doit importer le namespace
            ex : use Espace1;
            ex : use PDO; 
*/

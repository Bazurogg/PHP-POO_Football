<?php

require 'classFootball/Pays.php';
require 'classFootball/Equipe.php';
require 'classFootball/Joueur.php';
require 'classFootball/Mercato.php';
require 'classFootball/Nationalite.php';

$pays01 = new Pays("France");
$pays02 = new Pays("Espagne"); 
$pays03 = new Pays("Angleterre");
$pays04 = new Pays("Italie");

$equipe01 = new Equipe($pays01, "PSG", "1970");
$equipe02 = new Equipe($pays01, "Racing Club Stras", "1906");
$equipe03 = new Equipe($pays02, "FC Barcelone", "1899");
$equipe04 = new Equipe($pays02, "Real Madrid", "1902");
$equipe05 = new Equipe($pays03, "Manchester United", "1878");
$equipe06 = new Equipe($pays04, "Juventus", "1897");

$joueur01 = new Joueur("Kylian", "Mbappe", "20-12-1998");  
$joueur02 = new Joueur("Christiano", "Ronaldo", "5-02-1985"); 
$joueur03 = new Joueur("Lionel", "Messi", "24-06-1987");
$joueur04 = new Joueur("Neymar", "da Silva Santos", "2-02-1992" );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP/POO - Football</title>
</head>
<body>
    
</body>
</html>
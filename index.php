<?php

require 'classFootball/Pays.php';
require 'classFootball/Equipe.php';
require 'classFootball/Joueur.php';
require 'classFootball/Mercato.php';

$pays01 = new Pays("France");
$pays02 = new Pays("Espagne"); 
$pays03 = new Pays("Angleterre");
$pays04 = new Pays("Italie");
$pays05 = new Pays("Argentine");

$equipe01 = new Equipe($pays01, "PSG", "1970");
$equipe02 = new Equipe($pays01, "Racing Club Stras", "1906");
$equipe03 = new Equipe($pays02, "FC Barcelone", "1899");
$equipe04 = new Equipe($pays02, "Real Madrid", "1902");
$equipe05 = new Equipe($pays03, "Manchester United", "1878");
$equipe06 = new Equipe($pays04, "Juventus", "1897");
$equipe07 = new Equipe($pays01, "OM", "1899");

$joueur01 = new Joueur("Kylian", "Mbappe", "20-12-1998", $pays01);  
// $joueur02 = new Joueur("Christiano", "Ronaldo", "5-02-1985"); 
$joueur03 = new Joueur("Lionel", "Messi", "24-06-1987", $pays05);
// $joueur04 = new Joueur("Neymar", "da Silva Santos", "2-02-1992" );
$joueur05 = new Joueur("Dimitri", "Payet", "29-03-1987", $pays01);

$transfert01 = new Mercato($joueur01, $equipe01, "2017");
$transfert02 = new Mercato($joueur03, $equipe01, "2021");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP/POO - Football</title>
</head>

<body>

<?php

$pays01 -> afficherEquipe();
$equipe01 -> afficherEffectif();
$joueur01 -> afficherRecapJoueur();
?>
    
</body>

</html>
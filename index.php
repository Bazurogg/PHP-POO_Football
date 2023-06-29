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
$pays05 = new Pays("Argentine");
$pays06 = new Pays("Allemagne");
$pays07 = new Pays("Bresil");
$pays08 = new Pays("Chili");
$pays09 = new Pays("Pologne");
$pays10 = new Pays("Norvege");
$pays11 = new Pays("Portugal");
$pays12 = new Pays("Belgique");



$equipe01 = new Equipe($pays01, "PSG", "1970");
$equipe02 = new Equipe($pays01, "Racing Club Stras", "1906");
$equipe03 = new Equipe($pays02, "FC Barcelone", "1899");
$equipe04 = new Equipe($pays02, "Real Madrid", "1902");
$equipe05 = new Equipe($pays03, "Manchester United", "1878");
$equipe06 = new Equipe($pays04, "Juventus", "1897");
$equipe07 = new Equipe($pays01, "OM", "1899");
$equipe08 = new Equipe($pays06, "Bayern Munich", "1900");
$equipe09 = new Equipe($pays03, "Arsenal", "1886");
$equipe10 = new Equipe($pays04, "Milan AC", "1899");
$equipe11 = new Equipe($pays03, "Manchester City", "1880");


$joueur01 = new Joueur("Kylian", "Mbappe", "20-12-1998");     
$joueur02 = new Joueur("Christiano", "Ronaldo", "5-02-1985"); 
$joueur03 = new Joueur("Lionel", "Messi", "24-06-1987");
$joueur04 = new Joueur("Neymar", "Jr", "2-02-1992" );
$joueur05 = new Joueur("Dimitri", "Payet", "29-03-1987");
$joueur06 = new Joueur("Lucas", "Hernandez", "14-02-1996");
$joueur07 = new Joueur("Alexis", "Sanchez", "19-12-1988");
$joueur08 = new Joueur("Ousmane", "Dembele", "15-05-1997");
$joueur09 = new Joueur("Robert", "Lewandowski", "21-08-1988");
$joueur10 = new Joueur("Zinedine", "Zidane", "23-06-1972");
$joueur11 = new Joueur("Marcus", "Rashford", "31-09-1997");
$joueur12 = new Joueur("Raphael", "Varane", "25-04-1993");
$joueur13 = new Joueur("Erling", "Haaland", "20-07-2000");
$joueur14 = new Joueur("Karim", "Benzema", "19-12-1987");
$joueur15 = new Joueur("Eden", "Hazard", "19-12-1987");


$nationalite01 = new Nationalite($joueur06, $pays01);
$nationalite02 = new Nationalite($joueur06, $pays02);
$nationalite03 = new Nationalite($joueur03, $pays05);
$nationalite04 = new Nationalite($joueur01, $pays01);
$nationalite05 = new Nationalite($joueur04, $pays07);
$nationalite06 = new Nationalite($joueur08, $pays01);
$nationalite07 = new Nationalite($joueur09, $pays09);
$nationalite08 = new Nationalite($joueur10, $pays01);
$nationalite09 = new Nationalite($joueur11, $pays03);
$nationalite10 = new Nationalite($joueur12, $pays01);
$nationalite11 = new Nationalite($joueur13, $pays01);
$nationalite12 = new Nationalite($joueur14, $pays01);
$nationalite13 = new Nationalite($joueur02, $pays11);
$nationalite14 = new Nationalite($joueur15, $pays12);

$transfert01 = new Mercato($joueur01, $equipe01, "2017");
$transfert02 = new Mercato($joueur03, $equipe01, "2021");
$transfert03 = new Mercato($joueur06, $equipe08, "2019");
$transfert04 = new Mercato($joueur04, $equipe01, "2017");
$transfert05 = new Mercato($joueur05, $equipe07, "2013");
$transfert05 = new Mercato($joueur07, $equipe07, "2022");
$transfert06 = new Mercato($joueur08, $equipe03, "2017");
$transfert07 = new Mercato($joueur09, $equipe03, "2022");
$transfert08 = new Mercato($joueur02, $equipe04, "2009");
$transfert09 = new Mercato($joueur10, $equipe04, "2001");
$transfert10 = new Mercato($joueur11, $equipe05, "2023");
$transfert10 = new Mercato($joueur12, $equipe05, "2021");
$transfert10 = new Mercato($joueur13, $equipe11, "2021");
$transfert10 = new Mercato($joueur14, $equipe04, "2009");
$transfert08 = new Mercato($joueur02, $equipe05, "2021");
$transfert09 = new Mercato($joueur15, $equipe05, "2019");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP/POO - Football</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
<div class="master-container">

    <div class="nation-container">
        
        <div class="nation-box">
    
            <div class="team-box">
    
                <div class="logofed-box">
                    <img class="logofed"src="/Annexe/IMG/logo/FIFA_FR.png" alt="france fifa logo">
                </div>
    
                <div class="team-txt">
    
                    <?php
                    $pays01 -> afficherEquipe();
                    ?>
    
                </div>
    
            </div>
    
        </div>
        
        <div class="nation-box">
    
            <div class="team-box">
    
                <div class="logofed-box">
                    <img class="logofed" src="/Annexe/IMG/logo/FIFA_SP.png" alt="spain fifa logo">
                </div>
    
                <div class="team-txt">
    
                    <?php
                    $pays02 -> afficherEquipe();
                    ?>
    
                </div>
    
            </div>
    
        </div>

        <div class="nation-box">
    
            <div class="team-box">
    
                <div class="logofed-box">
                    <img class="logofed"src="/Annexe/IMG/logo/FIFA_ENG.png" alt="england fifa logo">
                </div>
    
                <div class="team-txt">
    
                    <?php
                    $pays03 -> afficherEquipe();
                    ?>
    
                </div>
    
            </div>
    
        </div>

        <div class="nation-box">
    
            <div class="team-box">
    
                <div class="logofed-box">
                    <img class="logofed"src="/Annexe/IMG/logo/FIFA_ITA.png" alt="italy fifa logo">
                </div>
    
                <div class="team-txt">
    
                    <?php
                    $pays04 -> afficherEquipe();
                    ?>
    
                </div>
    
            </div>
    
        </div>

    </div>

    <div class="team-container">

        <div class="teamrecap-box">

            <div class="teamrecap-text">

                <?php
                    $equipe01 -> afficherEffectif();
                ?>

            </div>


        </div>

        <div class="teamrecap-box">

        
            <div class="teamrecap-text">
                
                <?php
                    $equipe07 -> afficherEffectif();
                ?>

            </div>


        </div>

        <div class="teamrecap-box">

            <div class="teamrecap-text">
                
                <?php
                    $equipe03 -> afficherEffectif();
                ?>

            </div>


        </div>

        <div class="teamrecap-box">

            <div class="teamrecap-text">
                
                <?php
                    $equipe04 -> afficherEffectif();
                ?>

            </div>

        </div>
        
        <div class="teamrecap-box">

            <div class="teamrecap-text">
                
                <?php
                    $equipe05 -> afficherEffectif();
                ?>

            </div>

        </div>
        
        <div class="teamrecap-box">

            <div class="teamrecap-text">
                
                <?php
                    $equipe11 -> afficherEffectif();
                ?>

            </div>

        </div>
    
    </div>

    <div class="joueur-container">

        <div class="joueur-box">

            <a href="https://fr.wikipedia.org/wiki/Kylian_Mbapp%C3%A9" target="_blank">
                <div class="photojoueur-box">

                    <img src="/Annexe/IMG/joueur/K_Mbappe.png" class="photo-joueur" alt="photo kylian Mbappe">

                </div>
            </a>

            <div class="joueurrecap-box">

                <?php
                    $joueur01 -> afficherRecapJoueur();
                ?>

            </div>

        </div>

        <div class="joueur-box">

            <a href="https://fr.wikipedia.org/wiki/Lionel_Messi" target="_blank">

                <div class="photojoueur-box">

                    <img src="/Annexe/IMG/joueur/L_Messi.png" class="photo-joueur" alt="photo kylian Mbappe">

                </div>

            </a>
            
            <div class="joueurrecap-box">

                <?php
                    $joueur03 -> afficherRecapJoueur();
                ?>

            </div>

        </div>
        
        <div class="joueur-box">

            <a href="https://fr.wikipedia.org/wiki/Lucas_Hernandez" target="_blank">

                <div class="photojoueur-box">

                    <img src="/Annexe/IMG/joueur/L_Hernandez.png" class="photo-joueur" alt="photo kylian Mbappe">

                </div>

            </a>

            <div class="joueurrecap-box">

                <?php
                    $joueur06 -> afficherRecapJoueur();
                ?>

            </div>

        </div>

        <div class="joueur-box">

            <a href="https://fr.wikipedia.org/wiki/Karim_Benzema" target="_blank">
                
                <div class="photojoueur-box">
                    
                    <img src="/Annexe/IMG/joueur/K_Benzema.png" class="photo-joueur" alt="photo karim benzema">
                    
                </div>
                
            </a>
            
            <div class="joueurrecap-box">
                
                <?php
                    $joueur14 -> afficherRecapJoueur();
                ?>

            </div>

        </div>

        <div class="joueur-box">
    
            <a href="https://fr.wikipedia.org/wiki/Cristiano_Ronaldo" target="_blank">
                
                <div class="photojoueur-box">
                    
                    <img src="/Annexe/IMG/joueur/C_Ronaldo.png" class="photo-joueur" alt="photo christiano ronaldo">
                    
                </div>
                
            </a>

            <div class="joueurrecap-box">
                
                <?php

                    $joueur02 -> afficherRecapJoueur();

                ?>

            </div>
            
        </div>

        <div class="joueur-box">
    
            <a href="https://fr.wikipedia.org/wiki/Eden_Hazard" target="_blank">
                
                <div class="photojoueur-box">
                    
                    <img src="/Annexe/IMG/joueur/E_Hazard.png" class="photo-joueur" alt="photo Eden Hazard">
                    
                </div>
                
            </a>
            
            <div class="joueurrecap-box">
                
                <?php
                    $joueur15 -> afficherRecapJoueur();
                ?>

            </div>
        
        </div>


        <div class="joueur-box">
    
            <a href="https://fr.wikipedia.org/wiki/Erling_Haaland" target="_blank">

                <div class="photojoueur-box">

                    <img src="/Annexe/IMG/joueur/E_Haaland.png" class="photo-joueur" alt="photo Erling Haaland">

                </div>

            </a>

            <div class="joueurrecap-box">

                <?php
                    $joueur13 -> afficherRecapJoueur();
                ?>

            </div>

        </div>

    </div>

</div>
    
</body>

</html>
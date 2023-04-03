<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image" sizes="16x16" href="img/favicon.svg">
    <title>DigiNantes</title>

    <?php
    include('./php/bdd.php');

error_reporting(E_ERROR | E_PARSE);
    ?>
</head>
<body>
    
<header>
    <img class="logo" alt="logo diginantes" src="img/diginantes.svg">
    <button class="button_menu"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path fill="none" color="white" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 17h14M5 12h14M5 7h14"/>
    </svg></button>
    <nav class="menu">
            <a class="liens" href="index.php">Accueil</a>
            <a class="liens" href="apropos.php">À propos</a>
            <a class="liens" href="programmation.php">Programmation</a>
            <a class="liens" href="contact.php">Contact</a>
            <a class="liens" href="billetterie.php">Billetterie</a>
            <img alt="icone loupe" src="img/loupe.svg" id="loupe_icon">



    </nav>
</header>



<?php
    include('./header.php');
    $folder = './img/';
    error_reporting(E_ERROR | E_PARSE);
    
?>

<main>
<br> 
    <nav aria-label="Breadcrumb" class="breadcrumb">
        <ul>
            <li><a href="billetterie.php">Accueil</a></li>
            <li><b><span aria-current="page">Billetterie</span></b></li>
        </ul>
    </nav>

    <h1 class="text_partenaire">Billetterie</h1>

<h2>Selon vos envies</h2>
<p>Choisissez un billet pour 1 jour ou tout le week-end ! Seul ou accompagné. 
    Tarifs de groupe pour les entreprises et tarifs réduits pour les étudiants.</p>


    <div class="paiement">
        <h3>Pass 1 jour</h3>
        <div class="titre_paiement">
            <p id="marge"><b>Tarifs</b></p>
            <p><b>Prix</b></p>
            <p><b>Quantité</b></p>
        </div>

        <div class="trait"></div>
    </div>

    <div class="paiement2">
        <h3>Pass Week-end</h3>
        <div class="titre_paiement2">
            <p id="marge"><b>Tarifs</b></p>
            <p><b>Prix</b></p>
            <p><b>Quantité</b></p>
        </div>

        <div class="trait"></div>
    </div>


<p class="notes">Sur présentation d'un justificatif de scolarité à l'entrée du festival*<p>

<div class="total">
    <h3 class="text_sans_marge">TOTAL (TTC)</h3>
    <h3 type=number value='0' id="total_panier" class="text_sans_marge">0,00€</h3>

</div>

<a href="#" class="button">Valider</a>

<br>
<br>
<p><b>Méthodes de paiement acceptées</b></p>

<img alt="logo Paypal" class="icon_paiement" src="img/PayPal.png">
<img alt="logo Mastercard" class="icon_paiement" src="img/mastercard.svg">
<img alt="logo Visa" class="icon_paiement" src="img/visa.png">
<img alt="Logo CB" class="icon_paiement" src="img/cb.jpg">
<img alt="Logo google pay" class="icon_paiement" src="img/Google pay.png">
<img alt="logo apple pay" class="icon_paiement" src="img/Apple Pay logo.png">

<br>
<br>
<h2>Pour en savoir plus</h2>
<a href="apropos.php" class="button">À propos</a>
</main>


<?php
include('./footer.php');
?> 


<script src="./diginantes.js" type="text/javascript" ></script>

</body>
</html>
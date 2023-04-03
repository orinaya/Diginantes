<?php
    include('./header.php');
    $folder = './img/';
    error_reporting(E_ERROR | E_PARSE);
?>

<main>
<div id="bloc_accueil_presentation">
    <div id="bloc_image"><img alt="image réalité virtuelle" id="img_header_accueil" src="img/header.jpg"></div>
   
    <div id="bloc_gauche_accueil">
        <h2>Les 16 et 17 mars 2024</h2>
        <p><b>Parc des Expositions de la Beaujoire - Nantes</b></p>
        <div class="titre_accueil">DigiNantes, le festival du digital</div>
        <p>Venez découvrir les métiers digitaux, du développement web au marketing digital, 
            simple étudiant, directeur d’une entreprise où à la recherche d’innovation...</p><br><br>
        <a href="billetterie.php" class="button_large">Billetterie</a>
        <a href="billetterie.php" class="button" id="hide">Billetterie</a>
    </div>
</div>

<div id="bloc_propos">
    <h2>À propos</h2>
    <p>DigiNantes est un festival qui existe depuis 2022. Le but de notre festival est de réunir tous types 
        de personnes autour de l'univers digital. 
        <br><br>
        C'est un domaine qui a pris de l'ampleur au fil des années et qui est toujours en pleine extension. 
        La technologie ne jouait pas un rôle aussi important avant l'arrivée des réseaux sociaux et l'utilisation 
        massive de la technologie dans le monde du travail. 
        <br><br>
        Nous espérons donc promouvoir et faire comprendre l'utilité des métiers de ce domaine et des utilisations 
        également quotidienne mais de façon ludique. 
        <br><br>
        Pour cela, nous faisons appel à des professionnels indépendants ou des entreprises, des experts dans 
        certains domaines, afin de garantir la meilleure expérience possible. Nous proposerons ainsi des activités 
        diverses et variées comme la découverte de la VR, des conférences ou encore des concours pour mettre en 
        avant nos professionnels ou étudiants dans le joie et la bonne humeur !</p>

        <div class="case_propos">
            <h3 class="bloc_case_propos">2 jours de festival</h3>
            <h3 class="bloc_case_propos">2500 participants</h3>
            <h3 class="bloc_case_propos">Pleins d'activités</h3>
        </div>

        <a href="apropos.php" class="button">En savoir +</a>
</div>

<div class="bloc_programmation">
    <h2>Programmation</h2>

    <div class="bloc_programmation_lien  responsive_programmation">
        <div class="prog_lien responsive_prog">
            <img alt="image d'un drone" class="img_prog hover" src="img/drones.jpg">
            <p class="prog_titre"><b>16 mars - Concours de drones</b></p>
        </div>

        <div class="prog_lien responsive_prog">
            <img alt="planning hologramme" class="img_prog hover" src="img/planning.jpg">
            <p class="prog_titre"><b>17 mars - Concours entre étudiants</b></p>
        </div>

        <div class="prog_lien responsive_prog">
            <img alt="homme touchant un hologramme" class="img_prog hover" src="img/reseau.jpg">
            <p class="prog_titre"><b>17 mars - Concours entre professionnels</b></p>
        </div>

        <div id="voir_plus">
            <a href="programmation.php" class="button">Voir plus</a>
        </div>
    </div>

</div>

<div class="bloc_partenaire responsive_partenaire">
    <p class="text_sans_marge" id="violet"><b>Pourquoi notre festival ?</b></p>
    <h2 class="text_sans_marge">Devenez partenaires</h2>

    <div class="bloc_programmation_lien">
        <div class="prog_lien">
            <h3>Des experts dans le domaine</h3>
            <p>Nous faisons appel à des professionnels qualifiés, experts dans leur domaine 
                pour vous fournir un service de qualité et des informations validés.</p>
            <img alt="conférence" class="img_prog hover" src="img/conference.jpg">
            
        </div>

        <div class="prog_lien">
            <h3>Entre découverte et partage</h3>
            <p>Le festival est avant tout un moment de partage entre créateurs, professionnels 
                ou étudiants. Notre but est de créer une ambiance conviviale et de confiance!</p>
            <img alt="planning en hologramme" class="img_prog hover" src="img/planning.jpg">
        </div>

        <div class="prog_lien">
            <h3>L’innovation comme objectif</h3>
            <p>Nous offrons la chance à nos participants de montrer leur panel de compétences, 
                de montrer les tendances et, pourquoi pas être l’inspiration de demain.</p>
            <img alt="homme touchant un hologramme" class="img_prog hover"  src="img/reseau.jpg">
        </div>
    </div>
</div>

<a href="apropos.php" class="button">Nous contacter</a>

<h2>Nos réseaux</h2>
<div class="bloc_reseaux">
    <a class="icon_rs hover" href="https://www.facebook.com/profile.php?id=100089743401556" target="_blank"><img alt="logo facebook" class="icon_rs" src="img/facebook.png"><p class="violet">DigiNantes</p></a>
    <a class="icon_rs hover" href="https://www.instagram.com/diginantes/" target="_blank"><img alt="icone instagram" class="icon_rs" src="img/instagram.png"><p class="violet">@diginantes</p></a>
    <a class="icon_rs hover" href="https://www.linkedin.com/in/diginantes-festival-560083270/" target="_blank"><img alt="icone linkedin" class="icon_rs" src="img/linkedin.png"><p class="violet">in/diginantes-festival-560083270/</p></a>
</div>


<div class="bloc_adresse">
    <h2>Se rendre au festival</h2>

    <div class="bloc_adresse_flex">
            <div class="adresse">
                <img alt="icone maison" src="img/adresse.png">
                <p class="largeur"><b>Adresse</b></p>
                <p class="largeur">Parc des Expositions
                    Route de Saint-Joseph 
                    de Porterie
                    44300 Nantes</p>
            </div>

            <div class="map">
                <iframe id="frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2707.817477949519!2d-1.5338083844383952!3d47.259272279163206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4805ee45dccfd941%3A0x69e579d3f9f7882b!2sParc%20des%20Expositions%20de%20la%20Beaujoire!5e0!3m2!1sfr!2sfr!4v1679997035445!5m2!1sfr!2sfr" width="600" 
                height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
    </div>
    
</div>


<h2>Nos partenaires</h2>
<div class="bloc_partenaires">

    <img alt="logo metropoles logo" class="partenaires_logo" src="img/NantesMetroplesLogo.png">
    <img alt="logo nantes french tech" class="partenaires_logo" src="img/Nantes_French_Tech_logo.png">
    <img alt="logo maif" class="partenaires_logo" src="img/MAif_logo (1).png">
    <img alt="logo eva vr" class="partenaires_logo" src="img/Eva_VR_logo.png">
</div>
<div class="bloc_partenaires">
    <img alt="logo google" class="partenaires_logo" src="img/Google_Logo.png">
    <img alt="logo loire atlantique" class="partenaires_logo" src="img/logo_loire_atlantique.png">
    <img alt="logo orange" class="partenaires_logo" src="img/Orange_logo.png">

</div>

</main>


<?php
include('./footer.php');
?> 

<script src="./diginantes.js" type="text/javascript" ></script>
</body>
</html>
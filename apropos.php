<?php
    include('./header.php');
    $folder = './img/';
    error_reporting(E_ERROR | E_PARSE);
?>


<main>

    <br> 
    <nav aria-label="Breadcrumb" class="breadcrumb">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><b><span aria-current="page">À propos</span></b></li>
        </ul>
    </nav>


    <h1 class="text_partenaire">À propos</h1>

    <h2>Le concept</h2>
<div class="bloc_concept">
    <h3>Notre histoire</h3>
    <div class="bloc_concept_gauche">
        
        <p>Pour la mise en place de ce festival dans le domaine du digital, il faut revenir quelques 
            années en arrière. La technologie n'avait pas un rôle aussi important avant l'arrivée des 
            réseaux sociaux et l'utilisation massive de la technologie dans le monde du travail. Nous 
            avons eu l'idée, dans notre école du web et du digital, de mettre en avant ces merveilleux 
            métiers, où déjà des milliers de personnes sont des grands passionnés et veulent partager 
            leur quotidien avec le grand public et les étudiants. 
            <br>
            <br>
            Et voilà qu'en 2024, ce projet se réalisera !
            Ce festival va permettre de réunir des professionnels, des passionnés et des étudiants 
            lors de deux grandes journées dans la joie et la bonne humeur.</p>
            <div>
                <img alt="2 personnes devant un ordinateur" class="img_prog hover" src="img/young_people.jpg">
            </div>
        </div>

        <div>
            <h3>Notre fil rouge</h3>
            <p>Nous proposons conférences, stands, activités et concours, le tout dans la bonne humeur et le partage. Plus qu'un festival, 
                nous proposons une véritable immersion dans un monde magique. Notre univers est si vaste et merveilleux, que nous nous devons 
                de vous le partager. C'est également une occasion de s'instruire et comrpendre l'importance de nos métiers. 
                <br><br>
                Nous voulons exploiter l'impact que peut avoir le digital sur nos vies, dans notre quotidien comme au travail. 
                En effet, les entreprises tendent à se digitaliser de plus en plus, nous passons plus de temps sur les réseaux sociaux, 
                nos méthodes de communication via les médias évoluent, l'intelligence artificielle est devenue une réelle tendance. Jusqu'où
                ira cette évolution ?
                <br><br>
                Grâce à nos conférences, nos activités, nos stands, nos concours, nous explorerons toutes les facettes du digital pour 
                mieux comprendre et faire comprendre les enjeux, notamment en terme d'écologie, ou sociologiquement, etc...

            </p>


        <p><b>Rejoignez-nous !</b></p>
        <a href="billetterie.php" class="button left">Billetterie</a>
        </div>


</div>

<div>
    <h2>Nos valeurs</h2>

    <div class="valeurs">
        <div class="valeur_card">
            <img alt="icone ampoule" class="icon"src="img/innovation.png">
            <h3>Innovation</h3>
            <p>Notre but est de pousser l'innovation et les idées à son maximum. Nous désirons montrer 
                    le meilleur des technologies et vous les partager.</p>
        </div>
        <div class="valeur_card">
            <img alt="icone serrage de main en forme de coeur" class="icon"src="img/handshake.png">
            <h3>Partage</h3>
            <p>L'ambiance festive est de rigueur ! Nous souhaitons que chacun d'entre vous s'amuse grâce à 
                nos activités et notre bonne humeur. 
            </p>
        </div>

        <div class="valeur_card">
            <img alt="icone graphique" class="icon"src="img/graph.png">
            <h3>Audace</h3>
            <p>Pour atteindre l'excellence, être innovant, il faut avant tout être audacieux. Prenez des risques et
                vous serez peut-être à l'origine de la prochaine tendance ! 
            </p>
        </div>
    </div>
    
</div>


<div id="bloc_activites" class="bloc">
    <h2>Nos activités</h2>
    <p> Pendant ce festival vous aurez l'occasion de découvrir les métiers de demain grâce à nos nombreux stands, des activités 
                diverses et variées comme la réalité virtuelle ou la cybersécurité. Et pour nos professionnels et étudiants, il y aura 
                des concours. Obstacles et parcours seront au rendez-vous ce week-end. De nombreuses autres activités seront mises
                à l’honneur tels que l'animation 3D, la robotisation, les hologrammes et l'impression 3D. Il y aura également à 
                votre disposition un mur géant sur lequel vous pourrez dessiner, montrez-nous votre créativité. À la fin du festival,
                ce mur digital sera affiché pour que tout le monde puisse en profiter. 
                Un escalier musical sera également mis en place, à vous de montrer vos talents au cours de ce festival. Amusez-vous bien !</p>

    <div class="activites">
            <div class="activity">
                <img alt="image de réalité virtuelle" class="img_prog hover" src="img/activites-1.jpg">
                <p>Réalité virtuelle</p>
            </div>
        
            <div class="activity">
                <img alt="image de conférence"  class="img_prog hover" src="img/activites-2.jpg">
                <p>Conférences</p>
            </div>

            <div class="activity">
                <img alt="image montre connectée" class="img_prog hover" src="img/activites-3.jpg">
                <p>Concours entre écoles</p>
            </div>
    </div>

    <div class="activites">
        <div class="activity">
            <img alt="développeur devant un ordinateur"  class="img_prog hover" src="img/activites-4.jpg">
            <p>Défi d'entreprises</p>
        </div>
    
        <div class="activity">
            <img alt="hologramme sortant d'un téléphone" class="img_prog hover" src="img/activites-5.jpg">
            <p>Découverte de la cybersécurité</p>
        </div>

        <div class="activity">
            <img alt="ordinateur" class="img_prog hover" src="img/activites-6.jpg">
            <p>Rencontre de professionnel du digital</p>
        </div>
    </div>

    <a href="programmation.php" class="button left">Voir la programmation</a>
</div>

<h2>Nos partenaires</h2>
<div class="bloc_partenaires">

    <img alt="logo Nantes Métropole" class="partenaires_logo" src="img/NantesMetroplesLogo.png">
    <img alt="logo Nantes French Tech" class="partenaires_logo" src="img/Nantes_French_Tech_logo.png">
    <img alt="Logo Maif" class="partenaires_logo" src="img/MAif_logo (1).png">
    <img alt="Logo eva vr" class="partenaires_logo" src="img/Eva_VR_logo.png">
</div>
<div class="bloc_partenaires">
    <img alt="logo google_logo" class="partenaires_logo" src="img/Google_Logo.png">
    <img alt="logo Loire Atlantique" class="partenaires_logo" src="img/logo_loire_atlantique.png">
    <img alt="logo Orange" class="partenaires_logo" src="img/Orange_logo.png">

</div>



</main>
<?php
include('./footer.php');
?>

<script src="./diginantes.js" type="text/javascript" >



</script>
</body>
</html>
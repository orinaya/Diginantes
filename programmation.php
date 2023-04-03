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
        <li><b><span aria-current="page">Programmation</span></b></li>
    </ul>
</nav>


<h1 class="text_partenaire">Programmation</h1>

<div class="programme">
    <img alt="programme du festival" class="justify" src="img/programme.svg">
    <img alt="programme du samedi du festival" class="programme_jour" src="img/programme_samedi.svg">
    <img alt="programme du dimanche du festival" class="programme_jour" src="img/programme_dimanche.svg">
</div>

<h2>Nos stands</h2>
<div class="stands">
    

</div>

<p class="text_partenaire">Et bien d’autres...</p>
<p class="text_partenaire">Alors rejoignez nous sans attendre !</p>

<h2>Pour plus d'informations</h2>
<a href="apropos.php" class="button">À propos</a>
</main>

<?php
include('./footer.php');
?> 

    <script>

var stands_name = ['Big Data','Cybersécurité','IA','E-réputation','Marketing Digital','SEO','Webdesign','Développement','CRM','Base de données']
for (var k=0; k<stands_name.length;k++){
var card = document.createElement('div')
card.classList.add('stands_nom')
card.innerHTML= `
    <p class="stand_card">${stands_name[k]}</p>
`
document.querySelector('.stands').appendChild(card)
}
    </script>
    <script src="./diginantes.js" type="text/javascript" ></script>
</body>
</html>
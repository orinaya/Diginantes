<?php
    include('./header.php');
    $folder = './img/';
    error_reporting(E_ERROR | E_PARSE);
    
?>

<body>


<main>
<br> 
    <nav aria-label="Breadcrumb" class="breadcrumb">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><b><span aria-current="page">Contact</span></b></li>
        </ul>
    </nav>
    <h1 class="text_partenaire"> Contact </h1>

<form id="form_contact"  action="contact.php" method="get">
<div>
    <div class="form_part">
        <label for="prenom">Prénom</label>
        <input type="text" placeholder="ex: Jean" name="prenom" id="prenom" required>
        <span id="prenomError" class="error"></span>
    </div>
    <div class="form_part">
        <label for="nom">Nom*</label>
        <input type="text" placeholder="ex: Dupont" name="nom" id="nom" required>
        <span id="nomError" class="error"></span>
    </div>
    <div class="form_part">
        <label for="mail">Mail*</label>
        <input type="email" placeholder="ex: jean.dupont@gmail.com" name="mail" id="mail" required>
        <span id="mailError" class="error"></span>
    </div>
    <div class="form_part">
        <label for="tel">Téléphone</label>
        <input type="tel" placeholder="ex: 0770354569" name="tel" id="tel" required>
        <span id="telError" class="error"></span>
    </div>

</div>

<div id="contact_droit">
    <div class="form_part">
        <label for="message">Message*</label>
        <input type="text" placeholder="Saisir votre message..." name="message" id="message" required>
        <span id="messageError" class="error"></span>
    </div>

    <input type="submit" value="Valider" name="ajouter" id="btn-envoyer">

    <p class="notes">Champs obligatoires *</p>
</div>

</form>


</main>

<script>

var form = document.querySelector('form');
        form.addEventListener('submit', (event) => {

        event.preventDefault();

    if (form.checkValidity()) {
        var reponse = document.createElement('div')
        reponse.classList.add('reponse')
        reponse.innerHTML = `
        <h2>Message bien envoyé !</h2>
        `
    document.getElementById('contact_droit').appendChild(reponse)
    }
        form.reset();

})


</script>

<script src="./diginantes.js" type="text/javascript" ></script>
<?php
include('./footer.php');

print_r($_GET);
// $id =$_GET['id'];
$prenom = $_GET['prenom'];
$nom =$_GET['nom'];
$mail =$_GET['mail'];
$tel =$_GET['tel'];
$message =$_GET['message'];

recupMail($prenom, $nom, $mail, $tel, $message);
?>

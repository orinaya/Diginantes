
var button = document.querySelector('.button_menu')
var menu = document.querySelector('.menu')

button.addEventListener('click', function(){
    if(menu.style.display == 'none'){
        menu.style.display = 'block'
        menu.style.listStyleType = "none"
        // header.style.display = 'block'
        // menu.style.marginLeft ='auto'
        // menu.style.marginRight ='auto'
    }else{
        menu.style.display = 'none'
    }

})


var panier = document.getElementById('total_panier')
var totalCat = document.getElementsByClassName('prix')


var tab = [{
    'name' : 'Tarif normal',
    'price' : 10,
    'quantite' : 0,
},
{
    'name' : 'Tarif étudiant*',
    'price' : 5,
    'quantite' : 0,
},
{
    'name' : 'Tarif de groupe',
    'price' : 7,
    'quantite' : 0,
}
]

var tab2 = [{
    'name' : 'Tarif normal',
    'price' : 18,
    'quantite' : 0,
},
{
    'name' : 'Tarif étudiant*',
    'price' : 8,
    'quantite' : 0,
},
{
    'name' : 'Tarif de groupe',
    'price' : 12,
    'quantite' : 0,
}
]


for (var i=0; i<tab.length;i++){
    var produit = document.createElement('div')
    produit.classList.add('titre_paiement')
    produit.innerHTML= `
    <div class="taille_tarif">
    <p>${tab[i].name}</p>
</div>

<div>
    <p class="prix">${tab[i].price},00€</p>
</div>

<div>
    <form id="formulaire" action="addPokemon.php" method="get">
    <select name="quantité">
    <option value="0"> 0 </value>
        <option value="1"> 1</value>
        <option value="2">2</value>
        <option value="3">3</value>
        <option value="4">4</value>
        <option value="5">5</value>
        <option value="6">6</value>
        <option value="7">7</value>
        <option value="8">8</value>
        <option value="9">9</value>
        <option value="10">10</value>
    </select>
</form>

</div>`
    document.querySelector('.paiement').appendChild(produit)
}

for (var i=0; i<tab2.length;i++){
    var produit = document.createElement('div')
    produit.classList.add('titre_paiement2')
    produit.innerHTML= `
    <div class="taille_tarif">
    <p>${tab2[i].name}</p>
</div>

<div>
    <p type="number" value="${tab2[i].price}" class="prix">${tab2[i].price},00€</p>
</div>

<div>
    <form id="formulaire" action="addPokemon.php" method="get">
    <select name="quantité">
    <option value="0"> 0 </value>
        <option class="value" value="1">1</value>
        <option class="value" value="2">2</value>
        <option class="value" value="3">3</value>
        <option class="value" value="4">4</value>
        <option class="value" value="5">5</value>
        <option class="value" value="6">6</value>
        <option class="value" value="7">7</value>
        <option class="value" value="8">8</value>
        <option class="value" value="9">9</value>
        <option class="value" value="10">10</value>
    </select>
</form>

</div>`
    document.querySelector('.paiement2').appendChild(produit)
}


var prixT = document.getElementsByClassName('prix')
var quantiteT = document.getElementsByClassName('value')
var totalT = document.getElementById('total_panier')
console.log(quantite)
console.log(prix)
console.log(total)


function updateTotal() {
  var prix = Number(prixT.value);
  var quantite = Number(quantiteT.value);
  var total = prix * quantite;
  totalT.value = total.toFixed(2);
}

console.log(prixT)
console.log(quantiteT)
console.log(totalT)

prixT.addEventListener('input', updateTotal);
quantiteT.addEventListener('input', updateTotal);










var prix = document.getElementById("formulaire").value;
var newCard = document.querySelector('#total_panier')
function test()
{
    for (var i=1; i<tab.length;i++){
        newCard.innerText= document.getElementById("formulaire").value.price
    
        // document.getElementById('activities').appendChild(newCard)
    }
  
  
}

var tab3 = [
{
    'image' : 'img/activites-4.jpg',
    'titre' : "Défis d'entreprise",
},
{
    'image' : 'img/activites-5.jpg',
    'titre' : 'Découvertes de la cybersécurité',
},
{
    'image' : 'img/activites-6.jpg',
    'titre' : 'Rencontre de professionnel du digital',
}
]


for (var cpt=1; cpt<tab3.length;cpt++){
    var produit2 = document.createElement('div')
    produit2.classList.add('activites')
    produit2.innerHTML= 
    
        `
            <div class="activity">
                <img class="img_prog" src="${tab3[cpt].image}">
                <p>${tab3[cpt].titre}</></p>
            </div>
        
            <div class="activity">
                <img class="img_prog" src="${tab3[cpt].image}">
                <p>${tab3[cpt].titre}</></p>
            </div>

            <div class="activity">
                <img class="img_prog" src="${tab3[cpt].image}">
                <p>${tab3[cpt].titre}</></p>
            </div>
        `
    

            document.getElementById('bloc_activites').appendChild(produit2)
}



var stands_name = ['Big Data','Cybersécurité','IA','E-réputation','','Marketing Digital','SEO','Webdesign','Développement','CRM','Base de données']

for (var k=0; k<stands_name.length;k++){
var card = document.createElement('div')
card.classList.add('stands_nom')
card.innerHTML= `
    <p>Caca</p>
`
document.querySelector('.stands').appendChild(card)

}




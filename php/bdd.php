<?php
/*  
*    Description : connexion à la base
*    Parametre entree : aucun
*    Parametre sortie : objet PDO
*/
function connect(){

    $host = 'localhost';
    $base = 'diginantes';
    $login = 'root';
    $pwd = '';

    $oDbh = new PDO('mysql:host='.$host.';dbname='.$base, $login, $pwd);                //Connection via PDO
    $oDbh->exec("SET NAMES 'utf8'");                                                                            //Activation de l'UTF8
    $oDbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    return $oDbh;                                                                                                //Récupération du resultat de la requete dans un tableau
}


//FORMULAIRE
function recupMail($prenom, $nom, $mail, $tel, $message){
    $oDbh = connect();
    $sQuery ='INSERT INTO base_mail (prenom, nom, mail, tel, message)
    VALUES ("'.$prenom.'", "'.$nom.'", "'.$mail.'", "'.$tel.'", "'.$message.'")';
    
    echo $sQuery;
    $sQueryResult = $oDbh->query($sQuery);                                                      
    return $sQueryResult->fetchAll();
}


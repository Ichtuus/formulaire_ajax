<?php
require_once "../valitron-master/src/Valitron/Validator.php";
$errorMSG = "";

if(empty($_POST["lastname"]) ||
    empty($_POST["firstname"]) ||
    empty($_POST["gsm"]) ||
    empty($_POST["email"]) ||
    empty($_POST["adresse"]) ||
    empty($_POST["optionMarque"]) ||
    empty($_POST["optionModele"]) ||
    empty($_POST["service"]) ||
    empty($_POST["traitement"]) ||
    empty($_POST["lustrage"]) ||
    empty($_POST["decontamination"]) ||
    empty($_POST["degoudronage"]) ||
    empty($_POST["poils"]) ||
    empty($_POST["moquette"]) ||
    empty($_POST["sieges"]) ||
    empty($_POST["ciel"]) ||
    empty($_POST["cuir"]) ||
    empty($_POST["nourrissant"]) ||
    empty($_POST["reconditionnement"]) ||
    empty($_POST["vapeur"]) ||
    empty($_POST["nettoyage"])
){
}
else {
    $lastname = $_POST["lastname"];
    $firstname = $_POST['firstname'];
    $gsm = $_POST['gsm'];
    $email = $_POST['email'] ;
    $adresse = $_POST['adresse'] ;
    $optionMarque = $_POST['optionMarque'] ;
    $optionModele = $_POST['optionModele'] ;
    $service = $_POST['service'] ;
    $traitement = $_POST['traitement'] ;
    $lustrage = $_POST['lustrage'] ;
    $decontamination = $_POST['decontamination'] ;
    $degoudronage = $_POST['degoudronage'] ;
    $poils = $_POST['poils'] ;
    $moquette = $_POST['moquette'] ;
    $sieges = $_POST['sieges'] ;
    $ciel = $_POST['ciel'] ;
    $cuir = $_POST['cuir'] ;
    $nourrissant = $_POST['nourrissant'] ;
    $reconditionnement = $_POST['reconditionnement'] ;
    $vapeur = $_POST['vapeur'] ;
    $nettoyage = $_POST['nettoyage'];

}

if (empty($_POST["lastname"]) ||
    empty($_POST["firstname"]) ||
    empty($_POST["gsm"]) ||
    empty($_POST["email"]) ||
    empty($_POST["adresse"]) ||
    empty($_POST["optionMarque"]) ||
    empty($_POST["optionModele"]) ||
    empty($_POST["service"])
){
    $errorMSG .= "Il y a des champs requis";
}
else{
    $lastname = $_POST["lastname"];
    $firstname = $_POST['firstname'];
    $gsm = $_POST['gsm'];
    $email = $_POST['email'] ;
    $adresse = $_POST['adresse'] ;
    $optionMarque = $_POST['optionMarque'] ;
    $optionModele = $_POST['optionModele'] ;
    $service = $_POST['service'] ;
    $traitement = $_POST['traitement'] ;
    $lustrage = $_POST['lustrage'] ;
    $decontamination = $_POST['decontamination'] ;
    $degoudronage = $_POST['degoudronage'] ;
    $poils = $_POST['poils'] ;
    $moquette = $_POST['moquette'] ;
    $sieges = $_POST['sieges'] ;
    $ciel = $_POST['ciel'] ;
    $cuir = $_POST['cuir'] ;
    $nourrissant = $_POST['nourrissant'] ;
    $reconditionnement = $_POST['reconditionnement'] ;
    $vapeur = $_POST['vapeur'] ;
    $nettoyage = $_POST['nettoyage'];
}



$EmailTo = "your email";
$Subject = "Votre réservation ";


// prepare email body text
$Body = "";
$Body .= "Nom: ";
$Body .= $lastname;
$Body .= "\n";
$Body .= "Prénom: ";
$Body .= $firstname;
$Body .= "\n";
$Body .= "téléphone: ";
$Body .= $gsm;
$Body .= "\n";
$Body .= "email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "adresse: ";
$Body .= $adresse;
$Body .= "\n";
$Body .= "Marque: ";
$Body .= $optionMarque;
$Body .= "\n";
$Body .= "Modele: ";
$Body .= $optionModele;
$Body .= "\n";
$Body .= "service: ";
$Body .= $service;
$Body .= "\n";
$Body .= "Traitement vitre antipluie: ";
$Body .= $traitement;
$Body .= "\n";
$Body .= "Lustrage, protection et brillance carrosserie: ";
$Body .= $lustrage;
$Body .= "\n";
$Body .= "Décontamination, polissage, protection: ";
$Body .= $decontamination;
$Body .= "\n";
$Body .= "Dégoudronage, enlèvement de résine ou fiante d'oiseaux: ";
$Body .= $degoudronage;
$Body .= "\n";
$Body .= "Nettoyage poils d’animaux: ";
$Body .= $poils;
$Body .= "\n";
$Body .= "Shampoing tapis et moquette plus coffre: ";
$Body .= $moquette;
$Body .= "\n";
$Body .= "Shampoing sièges et panneaux de portes: ";
$Body .= $sieges;
$Body .= "\n";
$Body .= "Shampoing ciel de toit: ";
$Body .= $ciel;
$Body .= "\n";
$Body .= "Shampoing cuir / tissus: ";
$Body .= $cuir;
$Body .= "\n";
$Body .= "Traitement nourrissant et protecteur cuir: ";
$Body .= $nourrissant;
$Body .= "\n";
$Body .= "Reconditionnement complet: ";
$Body .= $reconditionnement;
$Body .= "\n";
$Body .= "Assainissement vapeur système de chauffage et climatisation: ";
$Body .= $vapeur;
$Body .= "\n";
$Body .= "Nettoyage bloc moteur: ";
$Body .= $nettoyage;
$Body .= "\n";
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// // redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}


<?php

/**
* 1 - Traitement de l'information (Model)
* 2 - Affichage du resultat (view)
*/

if ($_POST['message'] && $_POST['emailAddress']){
$message = $_POST['message'];
$email = $_POST['emailAddress'];
include("pages/contactformconfirmation.php");

}




?>
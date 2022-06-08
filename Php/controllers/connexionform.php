<?php

if ($_POST['utilisateur'] == 'utilisateurmoi' && $_POST['password'] =='123'){
$utilisateur = $_POST['utilisateur'];
$password = $_POST['password'];
include("pages/connexionformconfirmation.php");

}else if($_POST['utilisateur'] != 'utilisateurmoi' && $_POST['password'] =='123'){
    
    include("pages/erreur.php");
}else if($_POST['utilisateur'] == 'utilisateurmoi' && $_POST['password'] !='123'){
    
    include("pages/erreurpwd.php");
}else{
    include("pages/404.php");
}
<?php

function helloWorld()
{
    return "Hello World!";
}


?>


<?php
function quiEstLeMeilleurProf()
{
    return "Le prof de programmation Web";
}
?>

<?php
function jeRetourneMonArgument($arg)
{
    return $arg;
}


?>

<?php
function concatenation(string $nom, string $prenom){
    return $nom.$prenom;
}

?>

<?php
function concatenationAvecEspace(string $arg1, $arg2)
{
    return $arg1 . " " . $arg2;
}

?>

<?php
function somme($num1, $num2)
{
    return $num1 + $num2;
}
?>

<?php
function soustraction($num1, $num2)
{
    return $num1 - $num2;
}
?>

<?php

function multiplication($num1, $num2)
{
    return $num1 * $num2;
}
?>

<?php
function estIlMajeure($age)
{
    if ($age >= 18) {
        return true;
    } else {
        return false;
    }
}
?>
<?php
function estIlMajeure($age){ 

($age>=18) ? $res=true : $res=false;
return $res;
}
?>

<?php
function plusGrand($arg1, $arg2)
{
    if ($arg1 > $arg2) {
        return $arg1;
    } else {
        return $arg2;
    }
}
?>

<?php
function plusPetit($arg1, $arg2)
{
    if ($arg1 < $arg2) {
        return $arg1;
    } else {
        return $arg2;
    }
}
?>

<?php
function plusPetit($arg1, $arg2, $arg3)
{
    if ($arg1 < $arg2 && $arg1 < $arg3) {
        return $arg1;
    } else if ($arg2 < $arg1 && $arg2 < $arg3) {
        return $arg2;
    } else {
        return $arg3;
    }
}
?>

<?php
function premierElementTableau(array $array)
{

    if (empty($array)) {
        return null;
    } else {
        return $array[0];
    }
}
?>

<?php
function dernierElementTableau(array $array)
{
    if (empty($array)) {
        return null;
    } else {
        return end($array);
    }
}
?>

<?php
function plusGrand(array $array)
{
    if (empty($array)) {
        return null;
    } else {
        return max($array);
    }
}
?>

<?php
function plusPetit(array $array)
{
    if (empty($array)) {
        return null;
    } else {
        return min($array);
    }
}
?>

<?php
function verificationPassword($arg)
{
    if (strlen($arg) >= 8) {
        return true;
    } else {
        return false;
    }
}


?>

<?php
function verificationPassword($arg)
{


    $tab = str_split($arg);

    foreach ($tab as $po) {
        if (strlen($arg) >= 8)
            $length = true;
    }

    foreach ($tab as $po) {
        if (ctype_digit($po) >= 1)
            $digit = true;
    }

    foreach ($tab as $po) {
        if (ctype_upper($po) >= 1)
            $upper = true;
    }

    foreach ($tab as $po) {
        if (ctype_lower($po) >= 1)
            $lower = true;
    }

    if ($length && $digit && $upper && $lower) {
        return true;
    } else {
        return false;
    }
}
?>


<?php

function capital($pays)
{
    switch ($pays) {

        case "France":
            echo "Paris";
            break;

        case "Allemange":
            echo "Berlin";
            break;

        case "Italie":
            echo "Rome";
            break;

        case "Maroc":
            echo "Rabat";
            break;

        case "Espagne":
            echo "Madrid";
            break;

        case "Portugal":
            echo "Lisbonne";
            break;

        case "Angleterre":
            echo "Londres";
            break;

        default:
            echo "Inconnu";
    }
}

?>


<?php
function listHTML(string $nomlist, array $elementlist)
{
    if (empty($elementlist) || is_null($nomlist)) return null;

    echo "<h3>" . "Capital" . "</h3>";
    echo "<ul>";
    foreach ($elementlist as $element) {
        echo "<li>$element</li>";
    }
    echo "</ul>";
}

?>
<?php

function remplacerLesLettres($input)
{
    $phrase  = "Bonjour les amis";
    $e = 3;
    $i = 1;
    $o = 0;

    $newphrase = str_replace($e, $i, $o);
    return $newphrase;
}




?>

<?php

function remplacerLesLettres($input)
{

    $input = str_replace(
        ['e', 'i', 'o', 'E', 'I', 'O'],
        ['3', '1', '0', '3', '1', '0'],
        $input
    );
    return $input;
}




?>

<?php
function quelleDate(){
     
    return  date("d/m/Y");
    
}
?>
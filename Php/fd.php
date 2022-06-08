
<h1>Test</h1>
<pre>
<?php

//mes premières lignes!
echo "Hello World!";
echo "Mon premier site en PHP!";

$nb = 5;
$name = "nina";
var_dump($nb,$name);

$nom = "Doe";
 $prenom="John";
 $score = 100;
 // Ajout de 10 point au score
 $score = $score + 10;

 echo "Je m'appelle ".$prenom." ".$nom.". 
 Mon score est de ".$score." points.</br>";

 $equipe = array('Jack Sparrow', 'John Doe', 'Obi-Wan Kenobi');
 $equipe[]="robert";
 print_r($equipe);

 $joueur1 = [
     "nom" => "Keno",
     "prenom" => "Henry",
     "score" => 25
 ];

 $joueur2 = [
    "nom" => "K",
    "prenom" => "H",
    "score" => 32
];

$joueur3 = [
    "nom" => "Kira",
    "prenom" => "Dan",
    "score" => 2120
];
$bleu = [$joueur1,$joueur2,$joueur3];
echo "Equipe bleu :";

foreach($bleu as $joueur) {
    echo "Nom : ".$joueur['nom']." Prenom : ".$joueur['prenom']." .<br>";
}

foreach($bleu as $joueur){
    echo helloPlayer($joueur);
}

function saluerjoueur (array $player) {
    return "Salut à toi ".$player["nom"]." ".$player['prenom'];
}

?>

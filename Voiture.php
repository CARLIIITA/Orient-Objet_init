<?php 

class Voiture
{
    public float $vitesse;
    public string $marque;
    public float $temps;

    public function calculerDistance()
{
    //'THIS' VA PERMETTRE DE POINTER UN OBJET QUI N'A PAS ENCORE ETE INTANCER
    $distance = $this->vitesse * $this->temps;
    return $distance;
} 

}
$voiture = new Voiture ();
$voiture->vitesse = 55;
$voiture->marque = 'audi';
$voiture->temps = 2;

//echo "<pre>";   
//var_dump($voiture);
//echo "</pre>";
//echo "<pre>";
// $voiture->vitesse signifie la donnée que l'on reprends pour afficher la vitesse   
//var_dump($voiture->vitesse, $voiture->marque);
//echo "</pre>";

var_dump($voiture->calculerDistance());

die;

$voiture2 = new Voiture ();
$voiture2->vitesse = 25;
$voiture2->marque = 'bmw';
$voiture2->temps = 2;
echo "<pre>";
var_dump($voiture2->vitesse, $voiture2->marque);
echo "</pre>";

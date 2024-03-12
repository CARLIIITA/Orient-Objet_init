<?php 

declare(strict_types=1);

class Personne
{

    private string $nom;
    private string $prenom;
    private int $nombre = 0;
    private string $authorization;

    //le construct permet d'initialiser une action à l'instanciation
    // d'une classe

public function __construct(string $nom, string $prenom)
{
    $this->authorization ="RH";
    $this->nom =$nom;
    $this->prenom =$prenom;
}

public function __toString()
{
    return "Nom : " . $this->nom . ", Prenom : " . $this->prenom .' le chiffre est ' . $this->nombre;
}

public function __clone()
{
    $this->authorization = "disponiblite public";
}

public function increment()
{
    $this->nombre += 1;
}
}

$personne = new Personne('Doe','John');


$personne2 = clone $personne;
var_dump($personne);
echo "<br><br>";
var_dump($personne2);

/*$personne->increment();
$personne->increment();
$personne->increment();

echo $personne;*/
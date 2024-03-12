<?php 

declare(strict_types=1);


class Employe
{
    private string $nom;
    private string $poste;
   private float $salaire; 

    public function __construct(string $nom,string $poste,float $salaire)
    {
        $this->nom = $nom;
        $this->poste= $poste;
        $this->salaire = $salaire;
    } 

    public function __toString():string
    {
        return " L'employé(e) : " . $this->nom . " occupe le post de " . $this->poste .' avec un salaire estimé à ' . $this->salaire;
    }
    
    public function __clone()
    {
        $this->salaire *= 1.1;
    }

}

$employe1 = new Employe('Kate Holsenn','Secrétaire',1200);

$employe2 = clone $employe1;
echo($employe1);
echo "<br><br>";
echo($employe2);
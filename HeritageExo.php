<?php 

    //EXERCICE 2 
    //Créez une classe abstraite Forme avec une méthode abstraite calculerAire().
    //Créez trois classes dérivées : Cercle, Rectangle et Triangle.
    //Chaque classe doit étendre la classe abstraite Forme et implémenter 
    //la méthode calculerAire() en fonction de la forme géométrique correspondante.
    //Assurez-vous d'ajouter les propriétés nécessaires à chaque classe 
    //pour stocker les dimensions spécifiques de chaque forme 
    //(rayon pour le cercle, longueur et largeur pour le rectangle, etc.).
    //Implémentez la méthode magique __clone() dans les classes Cercle, Rectangle et Triangle.
    //Personnalisez le comportement de clonage pour chaque classe en fonction de ses propriétés.

    //Créez des objets de chaque classe représentant différentes formes géométriques.
    //Clônez certains de ces objets pour créer des copies.
    //Affichez les propriétés et les aires des formes d'origine et de leurs copies clonées.
    //Vérification des résultats :

    //Assurez-vous que les copies clonées ont les mêmes propriétés que les objets d'origine.
    //Vérifiez que les aires des formes d'origine et de leurs copies clonées sont identiques.
    //calcule de l'air d'un cercle : pi x rayon x rayon 
    //sur php la fonction 
    //pi()
    //retourne la valeur de pi

    declare(strict_types=1);
    
    
    abstract class Forme
    {
    }
    
    // la classe cercle herite de la class abstrait Forme
    class Cercle extends Forme
    {
        // on commmence par definire les propriete utile dans la classe cercle
        private ?float $rayon = null;
    
        // puis on creer un construct pour obliger l'utilisateur a definir la valeur de ces propriete a l'instanciation de
        // de la classe Cercle
    
        public function __construct(float $rayon)
        {
            $this->rayon = $rayon;
        }
    
        // la methode clone permet de generer un clone deux fois plus grand 
        //
        public function __clone()
        {
            $this->rayon = $this->rayon * 2;
        }
        // la methode calculAire est differente suivant chaque classe enfant
        public function calculAire()
        {
            return pi() * $this->rayon * $this->rayon;
        }
    }
    
    class Triangle extends Forme
    {
        private ?float $hauteur = null;
        private ?float $cote = null;
    
        public function __construct(float $hauteur, float $cote)
        {
            $this->hauteur = $hauteur;
            $this->cote = $cote;
        }
        public function __clone()
        {
            $this->hauteur = $this->hauteur * 2;
            $this->cote = $this->cote * 2;
        }
    
        public function calculAire()
        {
    
            return ($this->hauteur * $this->cote) / 2;
        }
    }
    
    class Rectangle extends Forme
    {
    
        private ?float $longueur = null;
        private ?float $largeur = null;
    
        public function __construct(float $longueur, float $largeur)
        {
            $this->longueur = $longueur;
            $this->largeur = $largeur;
        }
    
        public function __clone()
        {
            $this->longueur = $this->longueur * 2;
            $this->largeur = $this->largeur * 2;
        }
    
        public function calculAire()
        {
            return $this->longueur * $this->largeur;
        }
    }
    // on instancie la classe fille 
    $triangle = new Triangle(2, 3);
    // on clone l'objet qu'on viens de creer
    $triangle2 = clone $triangle;
    //puis on peu afficher les aire de chaque objet
    echo $triangle->calculAire() . "<br>";
    echo $triangle2->calculAire() . "<br>";
    
    $rectangle = new Rectangle(2, 3);
    $rectangle2 = clone $rectangle;
    echo $rectangle->calculAire() . "<br>";
    echo $rectangle2->calculAire() . "<br>";
    
    $cercle = new Cercle(2);
    $cercle2 = clone $cercle;
    echo $cercle->calculAire() . "<br>";
    echo $cercle2->calculAire() . "<br>";
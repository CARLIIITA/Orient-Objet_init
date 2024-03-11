<?php 

//Creez un fichier Product.php
//Créer une classe product avec comme propriété : title(string), price(float) , quantity (int), total(float)
//créer une méthode (c’est le nom des fonctions à l'intérieur des classes) qui va calculer le total du produit en multipliant le prix du produit par la quantité.
//Instancier deux fois la classe dans deux variables différentes, par exemple $commode et $chaise,attribuez lui des valeurs. 
//puis afficher grâce dans un écho les propriétés de l’objet ainsi que le total. 


class Product
{
    public string $title;
    public float $price;
    public int $quantity;
    public float $total;


    public function calculeTotal()
    {
        return $this->price * $this->quantity;
    }
}

$commode = new Product ();
$commode -> title = 'armoire';
$commode -> price = 200;
$commode -> quantity = 5;

echo "le produit est un(e)" .$product -> title . "Il y en a " .$product ->quantity . "au prix de" .$product ->price. "€ pour un total de" .$product ->calculeTotal();  


var_dump($commode->title, $commode->price, $commode->quantity);
echo "</pre>";

var_dump($commode->calculeTotal());

die;


{

$chaise = new Product ();
$chaise -> title = 'chair';
$chaise -> price = 50;
$chaise -> quantity = 18;

echo "<pre>";   
var_dump($chaise);
echo "</pre>";
echo "<pre>";

var_dump($chaise->title, $chaise->price, $chaise->quantity);
echo "</pre>";

var_dump($chaise->calculeTotal());

die;
}

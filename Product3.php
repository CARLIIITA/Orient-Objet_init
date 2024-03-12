<?php 

//Creer un fichier Product2.php 
//Créer la classe Product2 avec les mêmes propriétés que product . 
//Modifier la visibilité des propriétés et faites une encapsulation grâce à des getter et setter.
//finissez par instancier deux fois la classe et utilisez les méthodes précédemment créées pour modifier les valeurs de l’objet.

class Product3

{
        private const UNITE = '€' ;
        private string $title;
        private float $price;
        private int $quantity;
  
    public function __construct(string $title,float $price,int $quantity,)
    {
        $this->title = $title;
        $this->price= $price;
        $this->quantity = $quantity;
    } 
    public function setTitle(string $title)
    {
        
    }
    //ON AJOUTE UN RETURN ICI CAR CAR ON DEMANDE LA DONNEE  
    public function getTitle()
    {
        return $this->title;
    }
    //ON AJOUTE PAS DE RETURN ICI CAR ON CONNAIS DEJA LA DONNEE 
    public function setPrice(float $price)
    {
         $this->price = $price;
    }
    //ON AJOUTE UN RETURN ICI CAR CAR ON DEMANDE LA DONNEE  
    public function getPrice()
    {
        return $this->price;
    }
    //ON AJOUTE PAS DE RETURN ICI CAR ON CONNAIS DEJA LA DONNEE 
    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
    }
    //ON AJOUTE UN RETURN ICI CAR CAR ON DEMANDE LA DONNEE  
    public function getQuantity()
    {
        return $this->quantity;
    }

    public function calculeTotal()
    {
        if (self::verifTotal($this->price, $this->quantity)) {
            return $this->price * $this->quantity . self::UNITE;
        } else {
            return "l'une des valeurs est nulle ou négative";
        }
    }
        static function verifTotal($price, $quantity)
        {
        if ($price  >  0 && $quantity > 0) {
            return true;
        } else {
            return false;
        }
    }
}
    $table = new Product3('Red Table',500,0);

    $table->setTitle('Red Table');
    $table->setPrice(500);
    $table->setQuantity(0);
    echo 'Le prix Total de la ' 
    . $table->getTitle() . ' est de ' 
    . $table->calculeTotal() . '€';
    
    

//////////////////////////////////////////////////

    
                echo "<br>";
                echo "<br>";


//////////////////////////////////////////////////

    $glass = new Product2();

    $glass->setTitle("Green Glass");
    $glass->setPrice(50);
    $glass->setQuantity(0);
    echo 'Le prix Total du ' 
    .  $glass->getTitle() . ' est de ' 
    . $glass->calculeTotal() . $unite;


<?php

class Shop {

    // variabili
    public $nome;
    public $description;
    public $price;

    public function __construct($name, $description, $price){
        $this->nome = $name;
        $this->description = $description;
        $this->price = $price;
    }

}

class Discount extends Shop {

    public $discount;
    public $priceDiscounted;

    public function __construct($name, $description, $price, $discount) {
        parent::__construct($name, $description, $price);
        $this->discount = $discount;
    }

    public function getProduct() {
        $priceDiscounted = ( 100 - $this->discount ) * $this->price / 100;
        return "Nome prodotto: ". $this->nome . "<br> descrizione: " . $this->description . "<br> Prezzo: " . $priceDiscounted . "$ <br> Sconto: " . $this->discount . "%";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $product = new Discount("Pasta barilla", " Lorem ipsum dolor sit amet", 5, 10);
            echo $product->getProduct();
        ?>
    </body>
</html>
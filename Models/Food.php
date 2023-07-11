<?php

    // inseriamo le sottoclassi di product richiamandole tramite la proprietà exstends
    class Food extends Products{

        public $weight;
        public $ingredients;


        public function __construct(string $name, string $image, float $price , string $type, float $weight, string $ingredients) {
            // $this->var = $var;
            
            // ora ci richiamiamo il construct della classe padre
            parent:: __construct($name, $image, $price, $type);

            $this->weight = $weight;
            $this->ingredients = $ingredients;


            
        }

    }


?>
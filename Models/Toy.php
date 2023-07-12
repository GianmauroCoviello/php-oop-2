<?php

    // inseriamo le sottoclassi di product richiamandole tramite la proprietà exstends
    class Toy extends Products{

     
        public $details;
        public $dimension;


        public function __construct(string $name, string $image, float $price , string $type, String $details, Float $dimension) {
            // $this->var = $var;
            
            // ora ci richiamiamo il construct della classe padre
            parent:: __construct($name, $image, $price, $type);

            $this->details = $details;
            $this->dimension = $dimension;
           

            
        }
        
    }


?>
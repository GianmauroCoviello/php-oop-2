<?php

    // inseriamo le sottoclassi di product richiamandole tramite la proprietà exstends
    class Accesory extends Products{

        public $material;
        public $size;


        public function __construct(string $name, string $image, float $price , String $type, string $material, String $size) {
            // $this->var = $var;
            
            // ora ci richiamiamo il construct della classe padre
            parent:: __construct($name, $image, $price, $type, $material, $size);

            $this->material = $material;
            $this->size = $size;
           

            
        }
        
           

        
    }


?>
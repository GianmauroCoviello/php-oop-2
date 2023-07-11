<?php

    class  Products {

        public $name;
        public $image;
        public $price;
        public $type;


        public function __construct(string $name, string $image, float $price , string $type) {

            $this-> name = $name;
            $this->image =  $image;
            $this->price = $price;
            $this->type = $type;
        }


    };

   


?>
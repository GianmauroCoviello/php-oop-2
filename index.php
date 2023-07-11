<?php
    // richiamo la classe Products all'interno dell'index
    require_once __DIR__ .'/Models/Products.php';
    require_once __DIR__ .'/Models/Food.php';
    require_once __DIR__ .'/Models/Toy.php';

    // dichiaro una variabile che conterràil contenuto della classe con le instanze
    $product = new Products('Prodotti', 'https........', 25.99,'Cane');

    $Foods = new Food('food', 'https....', 12.99, 'Gatto', 2, 'carne, ossa di pollo');

    $Toys = new Toy('toy', 'https....', 15.99, 'Gatto', +12,);


    var_dump($product);
    var_dump($Foods);
    var_dump($Toys)
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="row">
            <h1>BOOLSHOP</h1>
        </div>
    </header>
    <main>
        
        <div class="row">
            <h2>I nostri prodotti</h2>
            <div class="card">
                <div class="content-img-card">

                </div>

            </div>
        </div>
    </main>
    
</body>
</html>
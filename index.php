<?php

     require_once __DIR__ .'/Models/Products.php';


     $product = new Products('Prodotti', 'https........', 25.99,'categories');

     var_dump($product)
   

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
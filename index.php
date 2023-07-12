<?php
    // richiamo la classe Products all'interno dell'index
    require_once __DIR__ .'/Models/Products.php';
    require_once __DIR__ .'/Models/Food.php';
    require_once __DIR__ .'/Models/Toy.php';
    require_once __DIR__ .'/Models/Accesory.php';

    // dichiaro una variabile che conterràil contenuto della classe con le instanze

    //  $product = new Products('Prodotti', 'https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg', 25.99,'Cane');

    // $Foods = new Food('food', 'https....', 12.99, 'Gatto', 2, 'carne, ossa di pollo');

    // $Toys = new Toy('toy', 'https....', 15.99, 'Gatto', +12,);

    // $Accesorys = new Accesory('Accesory', 'https .....', 35.99,'uccelli', 'plastic', 23);


    // var_dump($product);
    // var_dump($Foods);
    // var_dump($Toys);
    // var_dump($Accesorys)
    $productsCard = [
        new Food('Royal Canin Mini Adult','https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg',43.99,'Cane',545,'prosciutto, riso'),
        new Food('Almo Nature','https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg',44.99,'Cane',600,'manzo, cereali'),
        new Food('Almo Nature Cat','https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg',34.99,'Gatto',400,'tonno,pollo e prosciutto'),
    ]
   

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
            <!-- <h2>I nostri prodotti</h2> -->
            <?php foreach ($productsCard as $product): ?>

                <div class="card">
                    <div class="content-img-card">

                        <img src="<?php echo $product->image;?>" alt="">

                    </div>
                    <h2><?php echo $product->name;?></h2>
                    <p><?php echo $product->type;?></p>
                    <p>prezzo: <?php echo $product->price;?></p>
                    <p>peso netto: <?php echo $product->weight;?></p>
                    <p>Ingredienti: <?php echo $product->ingredients;?></p>

                </div>
            <?php endforeach; ?>    
        </div>
    </main>
    
</body>
</html>
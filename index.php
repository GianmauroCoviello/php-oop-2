<?php
    // richiamo la classe Products all'interno dell'index
    require_once __DIR__ .'/Models/Products.php';
    require_once __DIR__ .'/Models/Food.php';
    require_once __DIR__ .'/Models/Toy.php';
    require_once __DIR__ .'/Models/Accesory.php';

    // dichiaro una variabile che conterràil contenuto della classe con le instanze

    
    $productsFoodCard = [
        new Food('Royal Canin Mini Adult','https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg',43.99,'Cane',545,'prosciutto, riso'),
        new Food('Almo Nature','https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg',44.99,'Cane',600,'manzo, cereali'),
        new Food('Almo Nature Cat','https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg',34.99,'Gatto',400,'tonno,pollo e prosciutto'),
        new Food('Mangime per Pesci Guppy in Fiocchi','https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg',34.99,'Pesce',400,'tonno,pollo e prosciutto'),

        new Accesory('Voliera in legno','https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg',34.99,'Gatto','legno',83),
        new Accesory('Almo Nature Cat','https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg',34.99,'Gatto','legno',83),

        new Toy('Kong Classic', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 13.49, 'Gatto', 'Galleggia e rimbalza' , 20 ),
        new Toy('Topini di peluche Trixie', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 4.99, 'Gatto', 'Morbido con codina in corda' , 20 ),
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
            <?php foreach ($productsFoodCard as $product): ?>

                <div class="card">
                    <div class="content-img-card">
                        <img src="<?php echo $product->image;?>" alt="">
                    </div>
                    <h2><?php echo $product->name;?></h2>
                    <p><?php echo $product->type;?></p>
                    <p>prezzo: <?php echo $product->price;?></p>
                    <!-- condizione  -->
                    <?php if (get_class($product) === 'Food') {?>
                        
                    
                        <p>peso netto: <?php echo $product->weight; ?> </p>
                        <p>Ingredienti: <?php echo $product->ingredients;?> </p>

                    <?php } ?>
                    <?php if (get_class($product) === 'Accesory') {?>
                        
                    
                        <p>materiali: <?php echo $product->material; ?> </p>
                        <p>dimensioni: <?php echo $product->size;?> </p>

                    <?php } ?>
                </div>
            <?php endforeach; ?>    
        </div>
    </main>
    
</body>
</html>
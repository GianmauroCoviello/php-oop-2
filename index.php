<?php
    // richiamo la classe Products all'interno dell'index
    require_once __DIR__ .'/Models/Products.php';
    require_once __DIR__ .'/Models/Food.php';
    require_once __DIR__ .'/Models/Toy.php';
    require_once __DIR__ .'/Models/Accesory.php';

    // inseriamo un array che contarra tutti i prodotti con le loro specifiche sottoclassi
    $productsCard = [
        // Products Food
        new Food('Royal Canin Mini Adult','https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg',43.99,'Cane',545,'prosciutto, riso'),
        new Food('Almo Nature Holistic Maintenance Medium Large Tonno e Riso','https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg',44.99,'Cane',600,'manzo, cereali'),
        new Food('Almo Nature Cat Daily Lattina','https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg',34.99,'Gatto',400,'tonno,pollo e prosciutto'),
        new Food('Mangime per Pesci Guppy in Fiocchi','https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg',34.99,'Pesce',400,'tonno,pollo e prosciutto'),

        // Products Accesory
        new Accesory('Voliera Wilma in legno','https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg',34.99,'Uccello','legno','L 83 x P 67 x H 143cm'),
        new Accesory('Cartucce Filtranti per Filtro EasyCrystal','https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg',34.99,'Pesce','Materiale Espanso','N/D'),

        // Products Toy
        new Toy('Kong Classic', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 13.49, 'Cane', 'Galleggia e rimbalza' , 8.5 ),
        new Toy('Topini di peluche Trixie', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 4.99, 'Gatto', 'Morbido con codina in corda' , 8.5  ),
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
            <div class="col-subtitle">
                <h2>I NOSTRI PRODOTTI DISPONIBILI PER L'ACQUISTO:</h2>
            </div>
            <!-- inseriamo un ciclo per ciclare le card -->
            <?php foreach ($productsCard as $product): ?>

                <div class="card">
                    <div class="content-img-card">
                        <img src="<?php echo $product->image;?>" alt="">
                    </div>
                    <div class="content-description">

                        <h2><?php echo $product->name;?></h2>
                        <p><?php echo $product->type;?></p>
                        <p>prezzo: <?php echo $product->price;?></p>
                        <!-- condizione per specificare quali instanze aggiungere al construct di padre  -->
                        <?php if (get_class($product) === 'Food') {?>
                            
                        
                            <p>peso netto: <?php echo $product->weight.'g'; ?> </p>
                            <p>Ingredienti: <?php echo $product->ingredients;?> </p>

                        <?php } ?>
                        <?php if (get_class($product) === 'Accesory') {?>
                            
                        
                            <p>materiali: <?php echo $product->material; ?> </p>
                            <p>dimensioni: <?php echo $product->size;?> </p>

                        <?php } ?>
                        <?php if (get_class($product) === 'Toy') {?>
                            
                        
                            <p>caratteristiche: <?php echo $product->details; ?> </p>
                            <p>dimensioni: <?php echo $product->dimension.'x'.'10cm';?> </p>

                        <?php } ?>
                    </div>
                </div>
            <?php endforeach; ?> 
            <!-- fine del ciclo -->
        </div>
    </main>
    
</body>
</html>
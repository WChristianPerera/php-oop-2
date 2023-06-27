<!-- - L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo,
icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->
<?php
include_once __DIR__ . '/category.php';
include_once __DIR__ . '/food.php';
include_once __DIR__ . '/game.php';
include_once __DIR__ . '/kennel.php';
include_once __DIR__ . '/data.php';




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Animal-shop</title>
</head>
<body>
    <?php foreach ($arrProduct as $product): ?>
        <div class="card" style="width: 18rem;">
            <img src="img/<?php echo $product->getImg(); ?>" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title"><?php echo $product->getTitle(); ?></h5>
                <p class="card-text"><?php echo $product->getPrice(); ?>$</p>
            </div>
        </div>
    <?php endforeach; ?>
</body>
</html>
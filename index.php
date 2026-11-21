<?php

    $products = [
        ['name' => 'Membership', 'description' => '1 lanyard, 1 pin of your choice, 1 sticker bundle of your choice, membership card', 'price' => 450, 'stock' => 20, 'buy' => 'Buy Now'],
        ['name' => 'Lanyard', 'description' => '1 lanyard of your choice', 'price' => 75, 'stock' => 0, 'buy' => 'Buy Now'],
        ['name' => 'Pins', 'description' => '1 pin of your choice', 'price' => 25, 'stock' => 10, 'buy' => 'Buy Now'],
    ];
    
    $merch = [
        'Membership'    => ['price' => 450, 'stock' => 20],
        'Lanyard'       => ['price' => 75, 'stock' => 0],
        'Pins'          => ['price' => 25, 'stock' => 10],
    ];

    $tax = 2;

    for ($i = 0; $i < 3; $i++) {
        if ($products[$i]['stock'] <= 0) {
            $products[$i]['buy'] = "Out of Stock";
        } elseif ($products[$i]['stock'] <= 10) {
            $products[$i]['buy'] = "Selling Fast!";
        }else {
            $products[$i]['buy'] = "Buy Now";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- 
        Name: Clarenz Jeffrey D. Leycano
        Section: WD202
    -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles_design.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Pirata+One&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Association of DOST Scholars - HAU Student Chapter</h1>
        <p>Where Stellar Minds of Tomorrow Shine!</p>
    </header>

    <!-- Navigation -->
    <nav>
        <a href="#home">Home</a>
        <a href="#products">Products</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
    </nav>

    <!-- Main Content -->
    <main id="home">

        <img src="img/hero-image.png" id="hero-image">

        <h2>Welcome!</h2>
        <p>Browse our available merchandise below.</p>

        
        <!-- Product Table -->
        <table id="products">
            <tr>
                <th>Product</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            <?php for($i = 0; $i < 3; $i++) {?>
            <tr>
                <td>
                    <img src="img/<?=$i + 1?>.png" alt="Merch photo">
                    <h3><?= $products[$i]['name'];?></h3>
                </td>
                <td>
                    <?= $products[$i]['description'];?> <br><br> 
                    <span class="strong">
                        Stock: <?= $products[$i]['stock'];?>
                    </span>
                </td>
                <td>Php<?= $products[$i]['price'];?></td>
                <td><a href="#contact" class="buy-button"><?= $products[$i]['buy'];?></a></td>
                </td>
            </tr>
            <?php } ?>
        </table>

        <h2>Merch Logistics</h2>
        <table>
            <tr>
                <th>Product</th>
                <th>Stock</th>
                <th>Re-Order</th>
                <th>Total Value</th>
                <th>Tax Due</th>
            </tr>
            <?php include 'functions.php' ?>
        </table>
        <!-- About Section -->
        <section id="about">
            <h2>About Us</h2>
            <p>
                Association of DOST Scholars - Holy Angel University Student Chapter is a student organization comprised of all DOST Scholars studying at Holy Angel University, aiming to serve the nation with professional excellence, social responsibility, and servant leadership.
            </p><!-- Header -->
        </section>


    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 Clarenz Leycano - Creatives Officer of ADSHAUSC. All rights reserved.</p>
    </footer>

</body>
</html>
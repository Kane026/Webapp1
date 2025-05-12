<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Shibuya Bites</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<header>
    <?php include('./includes/header.php') ?>
</header>

<body>
    <main>
    <div class="menu-kaart-wrapper">
    <div class="menu-kaart"> 
        <img src="assets/img/header-shibuya-eats.png" class="menu-header">
            <div class="menu-background">
                <h1>Best sellers</h1>
            
            <div class="menu-container">
    </div>
    <?php

include("./dbcalls/conn.php");
include('./dbcalls/read.php');


//Het loopen van de database gegevens
foreach ($result as $value) {
    echo '<div class="menu-item-box">';
    echo '<br>' . '<img src="' . $value['img'] . '">';
    echo '<br> ' . $value['ProductNaam'];
    echo '<br> ' . $value['Prijs'];
    echo '<br> <span class="beschrijving">' . $value['Beschrijving'] . '</span>';
    echo '<img src="assets/img/chopstick-plus.png" alt="chopstick-plus" class="chopstick-plus">';


    echo '</div>';
}
?>
    </div>
    </div>

<div class="winkelmandje">
    <div class="winkelmandje-header">
    <h1>Winkelmandje</h1>
    <img src="assets/img/shopping-cart-icon.svg" alt="shopping-cart-icon" width="40px">
    </div>
    <hr>

</div>
</div>

    </main>
</body>

</html>    
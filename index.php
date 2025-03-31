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
    echo '<br> <h1>productnaam:</h1> ' . $value['ProductNaam'];
    echo '<br> <h1>prijs:</h1> ' . $value['Prijs'];
    echo '<br> <h1>afbeelding:</h1> ' . '<img src="' . $value['img'] . '">';

    echo '</div>';
}
?>
    </div>
    </div>


    </main>
</body>

</html>    
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Shibuya Bites</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<header>
    <?php include('../includes/header.php') ?>
</header>
<?php
include("conn.php");

$searchResult = $_GET["searchresult"];

$test = '%' . $searchResult . '%';

$stmt = $conn->prepare("SELECT * FROM menuitems WHERE Productnaam LIKE :product;");
$stmt->bindParam(":product", $test);
$stmt->execute();

$result = $stmt->fetchAll();


foreach($result as $key => $value){

    echo '<div class="menu-item-box">';
    echo '<br>' . '<img src="' . $value['img'] . '">';
    echo '<br> ' . $value['ProductNaam'];
    echo '<br> ' . $value['Prijs'];
    echo '<br> <span class="beschrijving">' . $value['Beschrijving'] . '</span>';
    echo '<img src="../assets/img/chopstick-plus.png" alt="chopstick-plus" class="chopstick-plus">';


    echo '</div>';
}
?>

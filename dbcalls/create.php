<h1>create</h1>
<?php
include("./conn.php");

//formulier en zet in de variabel product
$product = $_POST['gerecht'];
$prijs = $_POST['prijs'];
$img = $_POST['img'];
$beschrijving = $_POST['beschrijving'];

//Het create request
$sql = 'INSERT INTO menuitems(ProductNaam, Prijs, img, Beschrijving) VALUES (:product, :prijs, :img, :beschrijving);';

$stmt = $conn->prepare($sql);
$stmt->bindParam(":product", $product);
$stmt->bindParam(":prijs", $prijs);
$stmt->bindParam(":img", $img);
$stmt->bindParam(":beschrijving", $beschrijving);


$stmt->execute();


header('Location: ../admin.php');
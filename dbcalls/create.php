<h1>create</h1>
<?php
include("./conn.php");

//formulier en zet in de variabel product
$product = $_POST['gerecht'];

//Het create request
$sql = 'INSERT INTO menuitems(ProductNaam, Prijs) VALUES (:product, :prijs);';

$stmt = $conn->prepare($sql);
$stmt->bindParam(":product", $product);
$stmt->bindParam(":prijs", $prijs);
$stmt->execute();


header('Location: ../admin.php');
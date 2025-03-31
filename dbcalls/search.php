<?php 
include ('conn.php');

$searchResult = $_GET["searchresult"];

$stmt = $conn->prepare("SELECT * FROM menuitems WHERE PoductNaam LIKE :product;");
$stmt->bindParam(":product", $searchResult);
$stmt->execute();

$result = $stmt->fetchAll(); 

?>
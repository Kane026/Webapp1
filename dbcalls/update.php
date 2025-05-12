<?php

include("conn.php");

$productnaam = $_POST['productnaam'];
$prijs = $_POST['Prijs'];
$img = $_POST['img'];
$id = $_POST['id'];
$beschrijving = $_POST['beschrijving'];

$sql = 'UPDATE menuitems SET ProductNaam = :productnaam, Prijs = :prijs, img = :img, Beschrijving = :beschrijving WHERE id = :id;';
$stmt = $conn->prepare($sql);
$stmt->bindParam(":productnaam", $productnaam );
$stmt->bindParam(":prijs", $prijs );
$stmt->bindParam(":img", $img );
$stmt->bindParam(":beschrijving", $beschrijving );

$stmt->bindParam(":id", $id );

$stmt->execute();


header("location: ../admin.php");
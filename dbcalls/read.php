<?php
include("./dbcalls/conn.php");

    $stmt = $conn->prepare("SELECT * FROM menuitems;");
    $stmt->execute();
    $result = $stmt->fetchAll();
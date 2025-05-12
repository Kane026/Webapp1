<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<header>
<?php include('./includes/header.php') ?>
</header>
<body>
    
<form method="post" action="./dbcalls/checklogin.php">
    <input type="text" name="username">
    <input type="text" name="password">

    <input type="submit" value="Login">

</form>


</body>
</html>
<?php
session_start();
if(isset($_SESSION['username']))
{

?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <script defer src="assets/js/script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<header>
    <?php include('./includes/header.php') ?>
    <button onclick="logoutFunction()">Logout</button>
</header>

<body>
    <main>

<section class="create">
            <form name="createForm" action="./dbcalls/create.php" onsubmit="return validateCreateForm()"  method="post">
                <label for="">typ hier je gerechtnaam in:</label>
                <input type="text" name="gerecht" id="gerecht">
                <label for="">typ hier je prijs in:</label>
                <input type="text" name="prijs" id="prijs">
                <label for="">typ hier je beschrijving:</label>
                <input type="text" name="beschrijving" id="beschrijving">
                <label for="">typ hier je imagelocatie in:</label>
                <input type="text" name="img" id="1">

                <input type="submit" value="submit">
                
            </form>
        </section>
        <section class="admin">
            <?php

            include('./dbcalls/read.php');


            foreach ($result as $value) {

                ?>
                
                <form name="updateForm" action="./dbcalls/update.php" onsubmit="return validateUpdateForm()" method="post" > 
                   <input type="hidden" name="id" id="" value="<?php echo $value['ID']; ?>" >
                    <input type="text" name="productnaam" id="productnaam" value="<?php echo $value['ProductNaam']; ?>">
                    <input type="text" name="Prijs" id="Prijs" value="<?php echo $value['Prijs']; ?>">
                    <input type="text" name="img" id="" value="<?php echo $value['img']; ?>">
                    <input type="text" name="beschrijving" id="" value="<?php echo $value['Beschrijving']; ?>">
                    <button type="submit" class="update-button">Update</button>
                </form>
                <?php

              
                echo '<form action="./dbcalls/delete.php" method="post">';
                echo '<input type="hidden" name="ID" value="' . $value['ID'] . '">';
                echo '<input type="submit" name="" value="delete" class="delete-button" > ';
                echo '</form>';

                echo '</div>';
            }
            ?>


        </section>



    </main>
</body>

</html>   

<?php }
  else{
      header("location: ../index.php");
  }

?>
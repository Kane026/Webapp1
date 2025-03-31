<?php
session_start();
if(isset($_SESSION['username']))
{

?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <main>
   
    <h1>admin</h1>

    <main>

<h1>admin</h1>

<section class="create">
            <h2>CREATE</h2>
            <form action="./dbcalls/create.php" method="post">
                <label for="">typ hier je gerechtnaam in:</label>
                <input type="text" name="gerecht" id="1">
                <label for="">typ hier je prijs in:</label>
                <input type="text" name="prijs" id="1">
                <label for="">typ hier je imagelocatie in:</label>
                <input type="text" name="imagelocation" id="1">

                <input type="submit" value="submit">
            </form>
        </section>
        <section class="admin">
            <?php

            include('./dbcalls/read.php');


            foreach ($result as $value) {

                ?>
                
                <form action="./dbcalls/update.php" method="post">
                    <input type="text" name="productnaam" id="" value="<?php echo $value['ProductNaam']; ?>">
                    <input type="text" name="Prijs" id="" value="<?php echo $value['Prijs']; ?>">
                    <input type="text" name="img" id="" value="<?php echo $value['img']; ?>">
                    <button type="submit">Update</button>
                </form>
                <?php

              
                echo '<form action="./dbcalls/delete.php" method="post">';
                echo '<input type="hidden" name="ID" value="' . $value['ID'] . '">';
                echo '<input type="submit" name="" value="delete" > ';
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
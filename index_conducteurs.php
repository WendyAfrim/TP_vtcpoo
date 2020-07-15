<?php

require_once "classes/database.class.php";
require_once "classes/conducteurs.class.php";


$database = new Database;
$connexionBdd = $database->getConnexion();

$conducteur = new Conducteurs($connexionBdd);
$Allconducteurs = $conducteur->selectAll();

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Vtc - Conducteurs</title>
  </head>
  <body>
    

    <div class="container">

    <?php include_once "config/header_conducteurs.php";?>
    <br>
        <h1>Vtc - Conducteurs</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Prenom</th>
                <th scope="col">Nom</th>
                <th scope="col">Age</th>
                </tr>
            </thead>
            <tbody>
            <?php while($conducteur = $Allconducteurs->fetch()) 
            {
            ?>
                <tr>
                <th scope="row"><?php echo $conducteur['id_conducteur'];?></th>
                <td><?php echo $conducteur['prenom'];?></td>
                <td><?php echo $conducteur['nom'];?></td>
                <td><?php echo $conducteur['age']." "."ans";?></td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
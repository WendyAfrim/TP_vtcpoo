<?php 

if(isset($_GET['id_delete']) && !empty($_GET['id_delete'])) {

    $id_delete = htmlentities($_GET['id_delete']);

    require_once "classes/database.class.php";
    require_once "classes/conducteurs.class.php";

    $database = new Database;
    $connexionBdd = $database->getConnexion();

    $conducteur = new Conducteurs($connexionBdd);
    $conducteur->id = $id_delete;

    if($conducteur->delete()) {
        header('location:index_conducteurs.php');
    } else {
        header('location:index_conducteurs.php');
    }


}
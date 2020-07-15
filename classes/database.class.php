<?php 

class Database {

    // Les attributs de la classe
    private $host = "localhost";
    private $dbname = "vtcpoo";
    private $user = "root";
    private $password = "root";

    public $connexion = null;

    // Méthode de connexion à la bdd
    public function getConnexion() {

        try {
            $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
            $this->connexion = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.';charset=utf8',$this->user,$this->password, $options);
        } 
        catch (Exception $e) {
            echo $e->getMessage();
        }

        return $this->connexion;
    }
}
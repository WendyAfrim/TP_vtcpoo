<?php 

class Conducteurs {

    public $id;
    public $prenom;
    public $nom;
    public $age;

    public $conn;
    
    public function __construct($connexionBdd) {
        $this->conn = $connexionBdd;
    }

    public function selectAll () {

        $reqSelect = $this->conn->query("SELECT * FROM conducteurs");
        return $reqSelect;
    }
}
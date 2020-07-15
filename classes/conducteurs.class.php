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

    public function selectOne () {

        $query = ('SELECT * FROM conducteurs WHERE id_conducteur = :id_detail');

        $reqSelectOne = $this->conn->prepare($query);
        $reqSelectOne->execute ([
                                        'id_detail' => $this->id
        ]);

        $row = $reqSelectOne->fetch();

        $this->prenom = $row['prenom'];
        $this->nom = $row['nom'];
        $this->age= $row['age'];
    }

    public function create() {

        $query = "INSERT INTO conducteurs (prenom, nom, age) VALUES (:prenom, :nom, :age)";

        $reqInsert = $this->conn->prepare($query);
        $reqInsert->execute(array(
                              'prenom' => $this->prenom,
                              'nom' => $this->nom,
                              'age' => $this->age  
        ));

        return $reqInsert;
    }
}
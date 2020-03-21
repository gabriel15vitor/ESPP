<?php
class Usuario{
	private $conn;
    private $table_name = "usuarios";

    public $id;
    public $name;
 
    public function __construct($db){
        $this->conn = $db;
    }

    function readOne($usuario){
        $query = "SELECT usuario from usuarios where usuario='".$usuario."'";
     
        $prep_query = $this->conn->prepare( $query );
        $prep_query->execute();

        return $prep_query;
    }

    function insert($nome, $usuario, $email, $senha){
        $query = "INSERT INTO usuarios(nome, usuario, email, senha) VALUES(:n, :u, :e, :s)";

        $prep_query = $this->conn->prepare( $query );
        $prep_query->bindParam(":n", $nome);
        $prep_query->bindParam(":u", $usuario);
        $prep_query->bindParam(":e", $email);
        $prep_query->bindParam(":s", $senha);
        $prep_query->execute();

        return $prep_query;
    }

    function login($usuario, $senha){
        $query = "SELECT * from usuarios where usuario=':u' and senha=':s'";

        $prep_query = $this->conn->prepare( $query );
        $prep_query->bindParam(":u", $usuario);
        $prep_query->bindParam(":s", $senha);
        $prep_query->execute();

        return $prep_query;
    }
}
?>
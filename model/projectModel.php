<?php
require_once('database.php');

class ProjectModel{
    private $idpro;
    private $nompro;
    private $descpro;
    private $conn;
    
    public function __construct() {
       
        $this->conn = Database::getDb()->getConn();

    }


    public function getIdpro(){
        return $this->idpro;
    }

    public function setIdpro($idpro){
        $this->idpro = $idpro;

    }
    public function getNompro(){
        return $this->nompro;
    }

    public function setNompro($nompro){
        $this->nompro = $nompro;
    }
    public function getDescpro(){
        return $this->descpro;
    }

    public function setDescpro($descpro){
        $this->descpro = $descpro;
    }

    public function displayProjects()
    {
        $sql = "SELECT * FROM projet inner join user where iduser = :idu";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':idu', $iduser);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addProject($iduser)
    {
        $sql = "INSERT INTO projet (nompro, descpro,iduser) VALUES (:nom_pro, :descrp_pro, :idu)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nom_pro', $this->nompro);
        $stmt->bindParam(':descrp_pro', $this->descpro);
        $stmt->bindParam(':idu', $iduser);
        return $stmt->execute();
    }


    public function EditProjects(){
        
    }

    public function DeleteProjects(){
        
    }


}
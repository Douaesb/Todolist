<?php
require_once('./classes/database.php');
require_once('./classes/project.php');

class ProjectModel{
    private $idpro;
    private $nompro;
    private $descpro;


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

    private $conn;

    public function __construct() {
       
        $this->conn = Database::getDb()->getConn();

    }

    public function DisplayProjects(){
        
    }


    public function AddProjects(){
        
    }

    public function EditProjects(){
        
    }

    public function DeleteProjects(){
        
    }


}
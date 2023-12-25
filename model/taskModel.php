<?php
require_once('database.php');

class TaskModel{
    private $conn;
    private $idta;
    private $nomta;
    private $descta;
    private $datedeb;
    private $datefin;
    private $etat;
    private $statut;


    public function getIdta(){
        return $this->idta;
    }

    public function setIdta($idta){
        $this->idta = $idta;

    }
    public function getNomta(){
        return $this->nomta;
    }

    public function setNomta($nomta){
        $this->nomta = $nomta;
    }
    public function getDescta(){
        return $this->descta;
    }

    public function setDescta($descta){
        $this->descta = $descta;
    }

    public function getDatedeb(){
        return $this->datedeb;
    }

    public function setDatedeb($datedeb){
        $this->datedeb = $datedeb;

    }
    public function getDatefin(){
        return $this->datefin;
    }

    public function setDatefin($datefin){
        $this->datefin = $datefin;
    }
    public function getEtat(){
        return $this->etat;
    }

    public function setEtat($etat){
        $this->etat = $etat;
    }
    public function getStatut(){
        return $this->statut;
    }

    public function setStatut($statut){
        $this->statut = $statut;
    }

    public function __construct() {
       
        $this->conn = Database::getDb()->getConn();

    }

    public function DisplayTasks(){
        
    }

    public function AddTasks(){
        
    }

    public function EditTasks(){
        
    }

    public function DeleteTasks(){
        
    }

    public function SearchTasks(){
        
    }


}
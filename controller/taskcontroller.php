<?php
class taskcontroller{
    private $idta;
    private $nomta;
    private $descta;
    private $datedeb;
    private $datefin;
    private $etat;
    private $statut;

    public function __construct($idta,$nomta,$descta,$datedeb,$datefin,$etat,$statut) {
        $this->idta = $idta;
        $this->nomta = $nomta;
        $this->descta = $descta;
        $this->datedeb = $datedeb;
        $this->datefin = $datefin;
        $this->etat = $etat;
        $this->statut = $statut;

    }


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
?>
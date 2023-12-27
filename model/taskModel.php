<?php
require_once('database.php');

class TaskModel
{
    private $conn;
    private $idta;
    private $nomta;
    private $descta;
    private $datedeb;
    private $datefin;
    private $etat;
    private $statut;

    public function __construct()
    {

        $this->conn = Database::getDb()->getConn();
    }

    public function getIdta()
    {
        return $this->idta;
    }

    public function setIdta($idta)
    {
        $this->idta = $idta;
    }
    public function getNomta()
    {
        return $this->nomta;
    }

    public function setNomta($nomta)
    {
        $this->nomta = $nomta;
    }
    public function getDescta()
    {
        return $this->descta;
    }

    public function setDescta($descta)
    {
        $this->descta = $descta;
    }

    public function getDatedeb()
    {
        return $this->datedeb;
    }

    public function setDatedeb($datedeb)
    {
        $this->datedeb = $datedeb;
    }
    public function getDatefin()
    {
        return $this->datefin;
    }

    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;
    }
    public function getEtat()
    {
        return $this->etat;
    }

    public function setEtat($etat)
    {
        $this->etat = $etat;
    }
    public function getStatut()
    {
        return $this->statut;
    }

    public function setStatut($statut)
    {
        $this->statut = $statut;
    }


    public function DisplayTask($iduser, $idpro)
    {
        $sql = "SELECT * FROM tache where iduser = :idu AND idpro = :idpro AND etat is null ORDER BY datefin desc";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':idu', $iduser);
        $stmt->bindParam(':idpro', $idpro);
        $stmt->execute();
        $tasksData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $tasks = [];
        foreach ($tasksData as $ta) {
            $task = new taskModel();
            $task->setIdta($ta['idta']);
            $task->setNomta($ta['nomta']);
            $task->setDescta($ta['descta']);
            $task->setDatedeb($ta['datedeb']);
            $task->setDatefin($ta['datefin']);
            $task->setStatut($ta['statut']);
            $tasks[] = $task;
        }
        return $tasks;
    }

    public function AddTask($iduser, $idpro)
    {
        $sql = "INSERT INTO tache (nomta, descta,datedeb,datefin,statut,iduser,idpro) VALUES (:nomta, :descta, :datedeb, :datefin, :statut, :iduser, :idpro)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nomta', $this->nomta);
        $stmt->bindParam(':descta', $this->descta);
        $stmt->bindParam(':datedeb', $this->datedeb);
        $stmt->bindParam(':datefin', $this->datefin);
        $stmt->bindParam(':statut', $this->statut);
        $stmt->bindParam(':iduser', $iduser);
        $stmt->bindParam(':idpro', $idpro);
        return $stmt->execute();
    }


    public function DeleteTask($idta)
    {
        $sql = "DELETE FROM tache WHERE idta = :idta";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':idta', $idta);
        return $stmt->execute();
    }

    public function getTaskCount($iduser, $idpro, $status)
    {
        $sql = "SELECT count(idta) FROM tache WHERE statut = :status AND iduser = :iduser AND idpro = :idpro";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':iduser', $iduser);
        $stmt->bindParam(':idpro', $idpro);

        if ($stmt->execute()) {
            return $stmt->fetchColumn();
        } else {
            return false;
        }
    }
    public function EditTasks($idta)
    {
        $sql = "UPDATE tache SET nomta = :nomta, descta = :descta, datedeb = :datedeb, datefin = :datefin, statut = :statut WHERE idta = :idta";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nomta', $this->nomta);
        $stmt->bindParam(':descta', $this->descta);
        $stmt->bindParam(':datedeb', $this->datedeb);
        $stmt->bindParam(':datefin', $this->datefin);
        $stmt->bindParam(':statut', $this->statut);
        $stmt->bindParam(':idta', $idta);
        return $stmt->execute();
    }

    public function ArchiveTask($idta){
        $sql = "UPDATE tache SET etat = 1 WHERE idta = :idta";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':idta', $idta);
        return $stmt->execute();
    }



    public function SearchTasks()
    {
    }
}

<?php
require_once('../model/taskModel.php');
class taskcontroller{

    public function DisplayTasks(){
        if (isset($_GET['idpro'])) {
            $idpro = $_GET['idpro'];
            $iduser = $_SESSION['iduser'];
            $task =new TaskModel();
        return $task->DisplayTask($iduser,$idpro);
        }
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
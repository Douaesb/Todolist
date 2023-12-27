<?php
require_once('../model/taskModel.php');
class taskcontroller
{

    public function DisplayTasks()
    {
        if (isset($_GET['idpro'])) {
            $idpro = $_GET['idpro'];
            $iduser = $_SESSION['iduser'];
            $task = new TaskModel();
            return $task->DisplayTask($iduser, $idpro);
        }
    }

    public function AddTasks()
    {
        if (isset($_GET['idpro'])) {
            $idpro = $_GET['idpro'];
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addtask'])) {
                $task = new TaskModel();
                $task->setNomta($_POST['nomta']);
                $task->setDescta($_POST['descta']);
                $task->setDatedeb($_POST['datedeb']);
                $task->setDatefin($_POST['datefin']);
                $task->setStatut($_POST['statut']);
                $iduser = $_SESSION['iduser'];
                $task->AddTask($iduser, $idpro);
                header("Location: tasks.php?task&idpro=$idpro");
                exit();
            }
        }
    }

    public function EditTasks()
    {
    }

    public function DeleteTasks()
    {
        if (isset($_GET['idpro'])) {
            $idpro = $_GET['idpro'];
            if (isset($_GET['deletetask']) && isset($_GET['idta'])) {
                $idta = $_GET['idta'];
                $idpro = $_GET['idpro'];
                $task = new TaskModel();
                $task->DeleteTask($idta);
                header("Location: tasks.php?task&idpro=$idpro");
                exit();
            }
        }
    }

    public function getTaskCount()
    {

        if (isset($_GET['idpro'])) {
            $idpro = $_GET['idpro'];
            $iduser = $_SESSION['iduser'];
            $task = new TaskModel();
            $todoCount = $task->getTaskCount($iduser, $idpro, 'to do');
            $doingCount = $task->getTaskCount($iduser, $idpro, 'doing');
            $doneCount = $task->getTaskCount($iduser, $idpro, 'done');

            return [
                'todoCount' => $todoCount,
                'doingCount' => $doingCount,
                'doneCount' => $doneCount,
            ];
        }
    }

    public function SearchTasks()
    {
    }
}

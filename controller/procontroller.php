<?php
require_once('../model/projectModel.php');

class procontroller{

public function AddProjects(){
        
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addpro'])) {
    $projet = new ProjectModel();
    $projet->setNompro($_POST['nompro']);
    $projet->setDescpro($_POST['descpro']);
    $iduser = $_SESSION['iduser'];
    $projet->addProject($iduser);
    header('Location: projects.php');
    exit;
}
    }

    public function EditProjects(){
        
    }

    public function DeleteProjects(){
        
    }

}
?>
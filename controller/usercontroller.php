<?php
require_once('../model/userModel.php');

class usercontroller{

    public function Register(){
        $error = ""; // Initialize an empty error message

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
            $user = new UserModel();
            $role ='membre';
            $user->setnom($_POST['nom']);
            $user->setprenom($_POST['prenom']);
            $user->setemail($_POST['email']);
            $user->setpass($_POST['pass']);
            $user->settel($_POST['tel']);
            $user->setrole($role);
            $error = $user->register(); // Capture the error message

            if (empty($error)) {
                header('Location: ../view/login.php');
                exit();
            }
            
            return $error; // Return the error message

        }

    }

    public function AddProjects(){
        
    }

    public function EditProjects(){
        
    }

    public function DeleteProjects(){
        
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
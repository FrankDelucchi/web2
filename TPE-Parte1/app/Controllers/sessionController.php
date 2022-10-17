<?php

class sessionController extends appController{
  
    function login(){
        
        $this->view->showLogin($this->products, $this->categories);
    }

    function showAdmin(){

        if (!empty($_POST['user']) && !empty($_POST['pass' ])){
            
            $userName = $_POST['user'];
            $password = $_POST['pass'];
            $user = $this->usersModel->checkInfo($userName);
            
            if ($user && password_verify ($password ,($user->password))){
                
                session_start();
                $_SESSION ['LOGUED' ] = true;
                $_SESSION ['USERNAME' ] = $user ;

                header("Location: " . BASE_URL . 'adminProducts'); 
            }
            else {

                $this->view->showLogin($this->products, $this->categories, 'Identificación Incorrecta');
            }
        }
        else {
                
            $this->view->showLogin($this->products, $this->categories, 'Identificación Incorrecta');
        }
    }

    function showAdminProducts(){

        $this->checkActiveSession();
        $this->view->showAdminProducts($this->products, $this->categories);
    }

    function showAdminCategories(){

        $this->checkActiveSession();
        $this->view->showAdminCategories($this->products, $this->categories);
    }

    function logout() {

        session_start();
        session_destroy();

        header('Location: ' . BASE_URL . 'login');
    }
}
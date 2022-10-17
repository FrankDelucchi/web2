<?php

class categoriesController extends appController{

    function addCategorie(){

        $this->checkActiveSession();
        
        $categoria = $_POST['categoria'];
        $this->categoriesModel->add($categoria);

        header("Location: " . BASE_URL . "adminCategories");
    }

    function deleteCategorie($id){

        $this->checkActiveSession();
    
        $this->categoriesModel->delete($id);

        header("Location: " . BASE_URL . "adminCategories");
    }

    function editCategorie($id){

        $this->checkActiveSession();

        $singleCategorie = $this->categoriesModel->getCategoriesByID($id);
        $this->view->showEditAdminCategories($singleCategorie, $this->categories);
    }

    function modifyCategorie($id){

        $this->checkActiveSession();

        $categoria = $_POST['categoria'];
        $this->categoriesModel->update($id, $categoria);

        header("Location: " . BASE_URL . "adminCategories");
    }
}
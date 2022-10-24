<?php

class categoriesController extends appController{

    function addCategorie(){

        $this->checkActiveSession();
        
        $categoria = $_POST['categoria'];
        if(!$categoria == $this->categoriesModel->getCategoriesByName($categoria)){
            
            $this->categoriesModel->add($categoria);

            header("Location: " . BASE_URL . "adminCategories");
        }
        else
        $this->view->showAdminCategories($this->products, $this->categories, 'La categoria ya existe');
    }

    function deleteCategorie($id){

        $this->checkActiveSession();
        $filteredProducts = $this->productsModel->getProductsByFk($id);

        if(empty($filteredProducts)){
            
            $this->categoriesModel->delete($id);
            header("Location: " . BASE_URL . "adminCategories");
        }
        else
        $this->view->showAdminCategories($this->products, $this->categories, 'La categoria tiene productos asociados');
    
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
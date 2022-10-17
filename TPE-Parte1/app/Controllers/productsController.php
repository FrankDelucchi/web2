<?php

class productsController extends appController{

    function showProducts(){
        
        $this->view->showHome($this->products, $this->categories);   
    }

    function getProductByCategorie($categoria){

        $filteredProducts = $this->productsModel->getProductsByFk($categoria);
        $this->view->showProductsByCategorie($filteredProducts, $this->categories); 
    }

    function getSingleProduct($id){

        $singleProduct = $this->productsModel->getProductsByID($id);
        $this->view->showProductsByID($singleProduct, $this->categories);
    }

    function addProduct(){

        $this->checkActiveSession();
        
        $producto = $_POST['producto'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $id_categoria_fk = $_POST['fk'];
        $imagen = $_POST['imagen'];

        $this->productsModel->add($producto, $descripcion,$precio,$id_categoria_fk,$imagen);

        header("Location: " . BASE_URL . "adminProducts");
    }

    function deleteProduct($id){

        $this->checkActiveSession();

        $this->productsModel->delete($id);

        header("Location: " . BASE_URL . "adminProducts");
    }

    function editProduct($id){

        $this->checkActiveSession();

        $singleProduct = $this->productsModel->getProductsByID($id);
        $this->view->showEditAdminProducts($singleProduct, $this->categories);
    }

    function modifyProduct($id){

        $this->checkActiveSession();
        
        $producto = $_POST['producto'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $imagen = $_POST['imagen'];

        $this->productsModel->update($id, $producto, $descripcion, $precio, $imagen);

        header("Location: " . BASE_URL . "adminProducts");
    } 
}
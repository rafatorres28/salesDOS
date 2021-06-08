<?php
namespace controllers;

use config\Conn;
use model\Product;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductController
 *
 * @author esteb
 */
class ProductController extends Conn{
    
    public function getAll() {

        $query = "SELECT pr.idProduct, pr.nameProduct, pr.productState, pr.Provider_idProvider, "
                . " pr.Enterprise_idEnterprise , pr.ProductType_idProductType, pr.precioUnitario FROM Product pr ";
        $resultado = mysqli_query($this->conn(), $query);
        $arrayFinal = array();
        while ($row = mysqli_fetch_array($resultado,MYSQLI_NUM)) {
            $objProduct = new Product();
            $objProduct->setIdProduct($row[0]);
            $objProduct->setNameProduct($row[1]);
            $objProduct->setProductState($row[2]);
            $objProduct->setProvider_idProvider($row[3]);
            $objProduct->setEnterprise_idEnterprise($row[4]);
            $objProduct->setProductType_idProductType($row[5]);
            $objProduct->setPrecioUnitario($row[6]);

            $arrayFinal[$row[0]] = $objProduct->toString();
        }
        return json_encode($arrayFinal);
    }

    public function getById($id){
        $query = "SELECT pr.idProduct, pr.nameProduct, pr.productState, pr.Provider_idProvider, "
                . " pr.Product_idProduct, pr.ProductType_idProductType, pr.precioUnitario FROM Product pr  WHERE idProduct = $id";
        $resultado = mysqli_query($this->conn(), $query);
        $arrayFinal = array();
        while ($row = mysqli_fetch_array($resultado,MYSQLI_NUM)) {
            $objProduct = new Product();
            $objProduct->setIdProduct($row[0]);
            $objProduct->setNameProduct($row[1]);
            $objProduct->setProductState($row[2]);
            $objProduct->setProvider_idProvider($row[3]);
            $objProduct->setEnterprise_idEnterprise($row[4]);
            $objProduct->setProductType_idProductType($row[5]);
            $objProduct->setPrecioUnitario($row[6]);
            
            $arrayFinal[$row[0]] = $objProduct->toString();
        }
        return json_encode($arrayFinal);
    }
    public function delete($id) {
        $link = $this->conn();
        $query = "DELETE FROM Product WHERE idProduct = $id";
        mysqli_query($link, $query);
        if(mysqli_affected_rows($link)==1){
            return json_encode("True");
        }else{
            return json_encode("False");
        }
        
    }
      public function create(Product $objProductModel){
        $name= $objProductModel->getNameProduct();
        $prodState = $objProductModel->getProductState();
        $providId= $objProductModel->getProvider_idProvider();
        $EnterId= $objProductModel->getEnterprise_idEnterprise();
        $productTypeId= $objProductModel->getProductType_idProductType();
        $precioUnitario= $objProductModel->getPrecioUnitario();
        $link = $this->conn();
        
        $query = "INSERT INTO Product(nameProduct, productState, Provider_idProvider, Enterprise_idEnterprise, "
                . " ProductType_idProductType, precioUnitario) VALUES "
                . " ('$name' , '$prodState' , '$providId', '$EnterId', '$productTypeId', '$precioUnitario') ";
        mysqli_query($link, $query);
        if(mysqli_affected_rows($link)==1){
            return json_encode("Se ha realizado el registro con exito, filas afectadas 1");
        }else{
            return json_encode("No se ha realizado ningun registro, filas afectadas 0 ");
        }
    }
    public function update(Product $objProductModel){
        $idPrd= $objProductModel->getIdProduct();
        $name= $objProductModel->getNameProduct();
        $prodState = $objProductModel->getProductState();
        $providId= $objProductModel->getProvider_idProvider();
        $EnterId= $objProductModel->getEnterprise_idEnterprise();
        $productTypeId= $objProductModel->getProductType_idProductType();
        $precioUnitario= $objProductModel->getPrecioUnitario();
        $link = $this->conn();
        $query = "UPDATE Product SET nameProduct= '$name' ,  "
                . "productState = '$prodState', Provider_idProvider = '$providId', Enterprise_idEnterprise = '$EnterId', "
                . " ProductType_idProductType = '$productTypeId', precioUnitario = '$precioUnitario' WHERE idProduct = $idPrd";
        mysqli_query($link, $query);
        if(mysqli_affected_rows($link)==1){
            return json_encode("Se ha realizado el registro con exito, filas afectadas 1");
        }else{ 
            return json_encode("No se ha realizado ningun registro, filas afectadas 0 ");
        }
    }
}
